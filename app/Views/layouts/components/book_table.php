<div class="card overflow-hidden">
    <div class="overflow-x-auto">
        <table id="bookTable" class="w-full">
            <thead>
                <tr class="bg-[#31304D] text-[#F0ECE5]">
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Title</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Writer</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Genre</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Year</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Copies</th>
                    <th class="px-6 py-5 text-left text-xs font-medium uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $rowNum = 0; ?>
                <?php foreach ($books as $book): ?>
                    <?php $rowNum++; ?>
                    <tr>
                        <td>
                            <div class="text-sm font-medium text-[#0E0F1D]"><?= esc($book['title']) ?></div>
                            <div class="text-sm text-[#31304D]"><?= esc($book['publisher']) ?></div>
                        </td>
                        <td>
                            <div class="text-sm text-[#0E0F1D]"><?= esc($book['writer']) ?></div>
                        </td>
                        <td>
                            <div class="text-sm text-[#0E0F1D]"><?= esc($book['genre']) ?></div>
                        </td>
                        <td>
                            <div class="text-sm text-[#0E0F1D]"><?= esc($book['publication_year']) ?></div>
                        </td>
                        <td>
                            <?php
                            $status = $book['availability_status'];
                            $statusClass = '';
                            $statusText = '';

                            if ($status === 'Available') {
                                $statusClass = 'bg-green-100 text-green-800';
                                $statusText = 'Available';
                            } elseif ($status === 'Coming Soon') {
                                $statusClass = 'bg-yellow-100 text-yellow-800';
                                $statusText = 'Coming Soon';
                            } else {
                                $statusClass = 'bg-red-100 text-red-800';
                                $statusText = 'Referred Only';
                            }
                            ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?= $statusClass ?>">
                                <?= $statusText ?>
                            </span>
                        </td>
                        <td class=" text-sm text-[#0E0F1D]">
                            <?= esc($book['copies_available']) ?>/<?= esc($book['copies_total']) ?>
                        </td>
                        <td class=" text-sm font-medium">
                            <div class="flex">
                                <a href="<?= base_url('detail/' . $book['id']) ?>"
                                    class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></a>
                                <button type="button" class="text-yellow-600 hover:text-yellow-900 mr-3"
                                    onclick="openBookModal('edit', <?= $book['id'] ?>)"><i class="fas fa-edit"></i></button>
                                <form action="<?= base_url('book/delete/' . $book['id']) ?>" method="post"
                                    onsubmit="return confirm('You really want to delete this data?')">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="text-red-600 hover:text-red-900"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    body {
        background-color: #F0ECE5;
    }

    .dataTables_wrapper {
        font-family: 'Inter', sans-serif;
        color: #31304D;
    }

    .dataTables_filter {
        padding-bottom: 1rem;
    }

    .dataTables_filter input {
        border-radius: 0.5rem !important;
        padding: 4px !important;
        margin-left: 0.75rem !important;
    }

    .dataTables_length select {
        border-radius: 0.5rem !important;
    }

    .dataTables_info {
        font-size: 0.875rem;
        padding-top: 0 !important;
    }

    .dataTables_paginate {
        padding-top: 0 !important;

    }

    .dataTables_paginate .paginate_button {
        border-radius: 0.5rem !important;
        background: #F0ECE5 !important;
        padding: 0.25rem 0.75rem !important;
        color: #31304D !important;
    }

    table.dataTable {
        border: 1px solid #31304D !important;
        margin-bottom: 1rem !important;
    }

    table.dataTable thead th {
        border-bottom: 2px solid #31304D;
        padding: 1.1rem 1rem !important;
    }

    table.dataTable tbody tr:hover {
        background-color: #f9fafb;
        padding: 1.1rem 1rem !important;
    }

    table.dataTable tbody td {
        padding: 1rem !important;
    }
</style>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#bookTable').DataTable();
    });
</script>