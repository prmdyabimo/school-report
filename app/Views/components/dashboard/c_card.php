<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="h-[120px] shadow w-full flex flex-row items-center justify-between rounded-lg border-l-8 border-red-500 bg-white text-gray-800 px-4">
        <div class="flex">
            <i class="fas fa-user text-5xl"></i>
        </div>
        <div class="flex flex-col items-end">
            <h5 class="mb-2 text-xl font-bold tracking-tight">Users</h5>
            <p class="font-bold"><?= count($users); ?></p>
        </div>
    </div>
    <div class="h-[120px] shadow w-full flex flex-row items-center justify-between rounded-lg border-l-8 border-yellow-200 bg-white text-gray-800 px-4">
        <div class="flex">
            <i class="fas fa-chalkboard text-5xl"></i>
        </div>
        <div class="flex flex-col items-end">
            <h5 class="mb-2 text-xl font-bold tracking-tight">Reports</h5>
            <p class="font-bold"><?= count($reports); ?></p>
        </div>
    </div>
    <div class="h-[120px] shadow w-full flex flex-row items-center justify-between rounded-lg border-l-8 border-green-500 bg-white text-gray-800 px-4">
        <div class="flex">
            <i class="fas fa-tasks text-5xl"></i>
        </div>
        <div class="flex flex-col items-end">
            <h5 class="mb-2 text-xl font-bold tracking-tight">Reports Processed</h5>
            <p class="font-bold"><?= count($reports_processed); ?></p>
        </div>
    </div>
    <div class="h-[120px] shadow w-full flex flex-row items-center justify-between rounded-lg border-l-8 border-blue-500 bg-white text-gray-800 px-4">
        <div class="flex">
            <i class="fas fa-check-double text-5xl"></i>
        </div>
        <div class="flex flex-col items-end">
            <h5 class="mb-2 text-xl font-bold tracking-tight">Reports Complete</h5>
            <p class="font-bold"><?= count($reports_complete); ?></p>
        </div>
    </div>
</div>