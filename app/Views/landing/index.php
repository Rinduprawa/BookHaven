<?= $this->extend('layouts/main') ?>

<!-- Title -->
<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<!-- Main Content -->
<?= $this->section('content') ?>
<?= $this->include('layouts/landing/header') ?>
<?= $this->include('layouts/landing/hero') ?>
<?= $this->include('layouts/landing/catalog') ?>
<?= $this->include('layouts/landing/footer') ?>
<?= $this->endSection() ?>