<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Book extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM book ORDER BY created_at DESC');
        $data['books'] = $query->getResultArray();

        return view('dashboard/manage_book', $data);
    }

    public function save()
    {
        $rules = [
            'title' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
            'writer' => 'required',
            'genre' => 'required',
            'language' => 'required',
            'copies_count' => 'required|numeric',
            'copies_avail' => 'required|numeric',
            'max_lend_period' => 'required|numeric',
            'avail_status' => 'required',
        ];

        if ($this->validate($rules)) {
            $db = \Config\Database::connect();
            $db->transBegin();

            // Image
            $coverName = null;
            $file = $this->request->getFile('cover');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $coverName = $file->getRandomName();
                $file->move('uploads/covers', $coverName);
            }

            // Checkbox
            $ebookAvailable = $this->request->getVar('ebook_avail') ? 1 : 0;
            $audiobookAvailable = $this->request->getVar('audiobook_avail') ? 1 : 0;

            // Insert
            $data = [
                'title' => $this->request->getVar('title'),
                'writer' => $this->request->getVar('writer'),
                'publisher' => $this->request->getVar('publisher'),
                'publication_year' => $this->request->getVar('year'),
                'page_count' => $this->request->getVar('page_count') ?: null,
                'dimensions' => $this->request->getVar('dimensions') ?: null,
                'genre' => $this->request->getVar('genre'),
                'language' => $this->request->getVar('language'),
                'description' => $this->request->getVar('desc') ?: null,
                'copies_total' => $this->request->getVar('copies_count'),
                'copies_available' => $this->request->getVar('copies_avail'),
                'max_lend_duration' => $this->request->getVar('max_lend_period'),
                'age_range' => $this->request->getVar('age') ?: 'All Ages',
                'availability_status' => $this->request->getVar('avail_status'),
                'ebook_available' => $ebookAvailable,
                'audiobook_available' => $audiobookAvailable,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            if ($coverName) {
                $data['cover_image'] = $coverName;
            }
            $db->table('book')->insert($data);

            $db->transCommit();

            return redirect()->to('/manage-book')->with('success', 'Yay, we got a new book!');
        } else {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }
    }

    public function delete($id)
    {
        $db = \Config\Database::connect();
        $db->table('book')->where('id', $id)->delete();

        return redirect()->to('/manage-book')->with('success', 'Book deleted👀');
    }

}