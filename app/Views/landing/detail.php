<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
<?= $book['title'] ?? 'Book Detail' ?>
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>
<?= $this->include('layouts/landing/header') ?>
<?= $this->include('layouts/landing/detail') ?>
<?= $this->include('layouts/landing/recommendation') ?>
<?= $this->include('layouts/landing/footer') ?>
<?= $this->endSection() ?>