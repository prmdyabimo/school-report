<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4 py-4 px-4 bg-white">
    <div class="w-full h-full">
        <div class="flex md:flex-row flex-col w-[100%] gap-2">
            <div data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="w-full flex flex-col border-2 rounded-lg p-2">
                <div class="text-center">
                    <h1 class="uppercase font-bold tracking-wider text-3xl">Detail Report</h1>
                </div>
                <div class="m-4">
                    <dl class="grid md:grid-cols-2 grid-cols-1 gap-2 text-justify">
                        <dt class="font-semibold text-lg">Reporter</dt>
                        <dd>: <?= $report['name']; ?></dd>

                        <dt class="font-semibold text-lg">Phone</dt>
                        <dd>: <?= $report['telephone']; ?></dd>

                        <dt class="font-semibold text-lg">Email</dt>
                        <dd>: <?= $report['email']; ?></dd>

                        <dt class="font-semibold text-lg">Location</dt>
                        <dd>: <?= $report['location']; ?></dd>

                        <dt class="font-semibold text-lg">Date</dt>
                        <dd>: <?= $report['created_at']; ?></dd>

                        <dt class="font-semibold text-lg">Category</dt>
                        <dd>: <?= $report['category']; ?></dd>

                        <dt class="font-semibold text-lg">Topic</dt>
                        <dd>: <?= $report['topic']; ?></dd>

                        <dt class="font-semibold text-lg">Detail</dt>
                        <dd>: <?= $report['detail']; ?></dd>
                    </dl>
                </div>
            </div>

            <div data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="md:w-1/2 w-full flex flex-col border-2 rounded-lg p-2">
                <div class="text-center">
                    <h1 class="uppercase font-bold tracking-wider text-3xl">Image</h1>
                </div>
                <div class="flex m-auto">
                    <img src="<?= base_url('uploads/report/' . $report['image']); ?>" alt="<?= base_url('uploads/report/' . $report['image']); ?>">
                </div>
            </div>
        </div>

        <div data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="flex w-[100%]">
            <div class="w-full my-4 flex flex-col border-2 p-2 rounded-lg">
                <div class="my-4 text-center">
                    <h1 class="uppercase font-bold tracking-wider text-3xl">Response Report</h1>
                </div>
                <?php if ($data_user['role'] == 'ADMIN') : ?>
                    <form id="form_response" action="/response/<?= $report['id']; ?>" method="post" class="mx-4">
                        <?= csrf_field(); ?>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="detail_report">
                                Response
                            </label>
                            <textarea name="response" id="response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5"><?= $report['response']; ?></textarea>
                            <?php if (validation_show_error('response')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('response') ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="flex">
                            <div class="flex mb-2 items-center justify-between">
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mr-2 rounded focus:outline-none focus:shadow-outline" href="/report">
                                    Back
                                </a>
                                <button id="btn_response" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                    Response
                                </button>
                            </div>
                        </div>
                    </form>
                <?php endif; ?>

                <?php if ($data_user['role'] == 'USER') : ?>
                    <div class="mb-4">
                        <div class="border-2 rounded-sm m-2 p-2 text-justify">
                            <p>
                                <?= $report['response'] ?? "There has been no response from admin yet"; ?>
                            </p>
                        </div>
                        <a class="inline-block m-2 px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" href="/report">Back</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>