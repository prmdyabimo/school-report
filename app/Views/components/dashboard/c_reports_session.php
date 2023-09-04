<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4 py-4 px-4">
    <div class="flex my-2">
        <h1 class="md:text-2xl text-xl text-[#A50022] font-bold">MONITORING REPORTS</h1>
    </div>
    <table id="tableReportsSession" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="w-auto"><span class="font-bold">No</span></th>
                <th class="w-auto"><span class="font-bold">Name</span></th>
                <th class="w-auto"><span class="font-bold">Location</span></th>
                <th class="w-auto"><span class="font-bold">Category</span></th>
                <th class="w-auto"><span class="font-bold">Status</span></th>
                <th class="w-auto"><span class="font-bold">Action</span></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($reports as $value) : ?>
                <tr>
                    <td class="text-capitalize"><?= $no++; ?></td>
                    <td class="text-capitalize"><?= $value['name']; ?></td>
                    <td class="text-capitalize"><?= $value['location']; ?></td>
                    <td class="text-capitalize"><?= $value['category']; ?></td>
                    <td class="text-capitalize"><?= $value['status']; ?></td>
                    <td class="text-capitalize">
                        <a href="/report-detail/<?= $value['id']; ?>">
                            <button data-te-ripple-init class="bg-green-500 hover:bg-green-600 p-1.5 rounded">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6"></path>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>