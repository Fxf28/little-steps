<section id="hero" class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <a href="#"
            class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
            role="alert">
            <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                class="text-sm font-medium">Fitur Kalkulator kebutuhan bayi anda</span>
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <h1
            class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Little Steps <br> Asupan Bergizi & Artikel Nutrisi untuk Bayi.</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, sequi velit ullam iure optio omnis quia at non consequatur, est expedita! Voluptatibus nam illum alias, repellendus maxime dolor maiores voluptates! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="flex flex-col mt-15 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <!-- Modal toggle -->
            <button data-modal-target="kalkulator-modal" data-modal-toggle="kalkulator-modal"
                class="inline-flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 py-3 px-5 text-base font-medium text-center rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Kalkulator kebutuhan bayi anda
            </button>
        </div>
    </div>
</section>

<!-- Main modal -->
<div id="kalkulator-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Kalkulator Kebutuhan Gizi
                </h3>
                <button type="button"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="kalkulator-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" id="nutritionForm">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jenis Kelamin
                    </label>
                    <select id="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="male">Laki-Laki</option>
                        <option value="female">Perempuan</option>
                    </select>

                    <div>
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usia</label>
                        <div class="flex items-center space-x-2">
                            <input type="number" id="age" min="0" max="72"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="0-60" required />
                            <span class="text-sm text-gray-900 dark:text-gray-300">Bulan</span>
                        </div>
                    </div>

                    <div>
                        <label for="height"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tinggi Badan</label>
                        <div class="flex items-center space-x-2">
                            <input type="number" id="height" min="0"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Masukkan tinggi badan" required />
                            <span class="text-sm text-gray-900 dark:text-gray-300">Cm</span>
                        </div>
                    </div>

                    <div>
                        <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat
                            Badan</label>
                        <div class="flex items-center space-x-2">
                            <input type="number" id="weight" min="0"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Masukkan berat badan" required />
                            <span class="text-sm text-gray-900 dark:text-gray-300">Kg</span>
                        </div>
                    </div>

                    <button type="button" id="calculateButton"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Hitung
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Result Modal -->
<div id="result-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Hasil Kalkulasi
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                id="close-result-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="p-4 md:p-5">
            <div id="result" class="text-sm font-medium text-gray-900 dark:text-white"></div>
        </div>
    </div>
</div>

<script>
    const resultModal = document.getElementById("result-modal");
    const resultContainer = document.getElementById("result");
    const closeResultModal = document.getElementById("close-result-modal");

    // Fungsi untuk membuka modal
    function showResultModal(content) {
        resultContainer.innerHTML = content;
        resultModal.classList.remove("hidden");
    }

    // Fungsi untuk menutup modal
    function hideResultModal() {
        resultModal.classList.add("hidden");
    }

    // Event Listener untuk tombol close
    closeResultModal.addEventListener("click", hideResultModal);

    document.getElementById("calculateButton").addEventListener("click", function() {
        const gender = document.getElementById("gender").value;
        const age = parseFloat(document.getElementById("age").value) / 12; // Convert months to years
        const height = parseFloat(document.getElementById("height").value) / 100; // Convert cm to meters
        const weight = parseFloat(document.getElementById("weight").value);

        if (isNaN(age) || isNaN(height) || isNaN(weight) || age < 0 || height <= 0 || weight <= 0) {
            showResultModal("Mohon isi semua bidang dengan benar.");
            return;
        }

        let bmr;
        const pa = age < 1 ? 1.1 : 1.2;

        if (gender === "male") {
            bmr = 88.5 - (61.9 * age) + pa * (26.7 * weight) + (903 * height);
        } else {
            bmr = 135.3 - (30.8 * age) + pa * (10.0 * weight) + (934 * height);
        }

        const protein = weight * (age < 1 ? 10 : age < 3 ? 15 : 20);
        const fat = bmr * 0.35 / 9; // Fat in grams (35% of energy)
        const carbs = bmr * 0.55 / 4; // Carbs in grams (55% of energy)

        // Fungsi untuk mengevaluasi status kebutuhan gizi
        function evaluate(value, normalRange) {
            if (value < normalRange[0]) {
                return "Dibawah Normal";
            } else if (value > normalRange[1]) {
                return "Diatas Normal";
            } else {
                return "Normal";
            }
        }

        // Rentang normal (contoh rentang, perlu disesuaikan dengan data valid)
        const energyRange = [500, 1000]; // kkal
        const proteinRange = [10, 30]; // gram
        const fatRange = [15, 40]; // gram
        const carbsRange = [50, 150]; // gram

        // Evaluasi status
        const energyStatus = evaluate(bmr, energyRange);
        const proteinStatus = evaluate(protein, proteinRange);
        const fatStatus = evaluate(fat, fatRange);
        const carbsStatus = evaluate(carbs, carbsRange);

        // Hasil dengan keterangan
        const resultHtml = `
        <p><strong>Kebutuhan Gizi:</strong></p>
        <ul>
            <li><strong>Energi:</strong> ${bmr.toFixed(2)} kkal (${energyStatus})</li>
            <li><strong>Protein:</strong> ${protein.toFixed(2)} g (${proteinStatus})</li>
            <li><strong>Lemak:</strong> ${fat.toFixed(2)} g (${fatStatus})</li>
            <li><strong>Karbohidrat:</strong> ${carbs.toFixed(2)} g (${carbsStatus})</li>
        </ul>
    `;
        showResultModal(resultHtml);
    });
</script>
