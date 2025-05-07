<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index($id)
    {
        $db = \Config\Database::connect();

        $query = $db->query("SELECT * FROM book WHERE id = ?", [$id]);
        $book = $query->getRowArray();

        if (isset($book['language'])) {
            switch ($book['language']) {
                case 'IND':
                    $book['language'] = 'Bahasa Indonesia';
                    break;
                case 'EN':
                    $book['language'] = 'English';
                    break;
                default:
                    $book['language'] = 'Other';
            }
        }

        if (isset($book['age_range'])) {
            switch ($book['age_range']) {
                case 'Children':
                    $book['age_range'] = '5-12 Years old';
                    break;
                case 'Teen':
                    $book['age_range'] = '13-17 Years old';
                    break;
                case 'Adult':
                    $book['age_range'] = '18+';
                    break;
                default:
                    $book['age_range'] = 'All Ages';
            }
        }

        if (!empty($book['cover_image'])) {
            $imagePath = FCPATH . 'uploads/covers/' . $book['cover_image'];
            if (!file_exists($imagePath)) {
                $book['cover_image'] = '';
            }
        }

        $relatedQuery = $db->query(
            "SELECT * FROM book WHERE id != ? AND genre = ? ORDER BY created_at DESC LIMIT 6",
            [$id, $book['genre'] ?? '']
        );
        $relatedBooks = $relatedQuery->getResultArray();

        if (count($relatedBooks) < 6) {
            $remainingCount = 6 - count($relatedBooks);
            $existingIds = array_column($relatedBooks, 'id');
            $existingIds[] = $id;

            $placeholders = implode(',', array_fill(0, count($existingIds), '?'));
            $params = $existingIds;

            $moreQuery = $db->query(
                "SELECT * FROM book WHERE id NOT IN ($placeholders) ORDER BY created_at DESC LIMIT $remainingCount",
                $params
            );

            $moreBooks = $moreQuery->getResultArray();
            $relatedBooks = array_merge($relatedBooks, $moreBooks);
        }

        $data = [
            'book' => $book,
            'books' => $relatedBooks,
            'title' => $book['title'] ?? 'Book Detail'
        ];

        return view('landing/detail', $data);
    }
}