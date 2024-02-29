<html lang="en" class="dark">

<head>
    <title>Diskominfo Semarang</title>
    <link rel="web icon" href="{{ asset('storage/picture/logo.png') }}">
    <link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app//app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    {{-- NAVBAR --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            {{-- <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse"> --}}
            <img src="{{ asset('storage/picture/logo.png') }}" class="h-12" alt="logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">DISKOMINFO KOTA
                SEMARANG</span>
            {{-- </a> --}}
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                {{-- darkmode --}}
                <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-2">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="tooltip-toggle" role="tooltip"
                    class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm tooltip opacity-0 invisible"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1190.94px, 63.3962px);"
                    data-popper-placement="bottom">
                    Toggle dark mode
                    <div class="tooltip-arrow" data-popper-arrow=""
                        style="position: absolute; left: 0px; transform: translate(67.9245px, 0px);"></div>
                </div>
                <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script><svg id="SvgjsSvg1344" width="2" height="0"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.dev"
                    style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
                    <defs id="SvgjsDefs1345"></defs>
                    <polyline id="SvgjsPolyline1346" points="0,0"></polyline>
                    <path id="SvgjsPath1347"
                        d="M-1 2647.9585108585356L-1 2647.9585108585356C-1 2647.9585108585356 176.88291454315186 2647.9585108585356 176.88291454315186 2647.9585108585356C176.88291454315186 2647.9585108585356 353.7658290863037 2647.9585108585356 353.7658290863037 2647.9585108585356C353.7658290863037 2647.9585108585356 530.6487436294556 2647.9585108585356 530.6487436294556 2647.9585108585356C530.6487436294556 2647.9585108585356 707.5316581726074 2647.9585108585356 707.5316581726074 2647.9585108585356C707.5316581726074 2647.9585108585356 884.4145727157592 2647.9585108585356 884.4145727157592 2647.9585108585356C884.4145727157592 2647.9585108585356 1061.2974872589111 2647.9585108585356 1061.2974872589111 2647.9585108585356C1061.2974872589111 2647.9585108585356 1061.2974872589111 2647.9585108585356 1061.2974872589111 2647.9585108585356 ">
                    </path>
                </svg>
                {{-- end dark mode --}}
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-12 h-12 rounded-full" src="/storage/picture/albus.jpg" alt="user photo">
                </button>

                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    {{-- <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Albus Percival Wulfric Brian
                            Dumbledore</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">albus@hogwarts.com</span>
                    </div> --}}
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                        <li>
                            <a href="/profil"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        {{-- <li>
                            <a href="/editProfile"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit
                                Profile</a>
                        </li> --}}
                    </ul>
                </div>

                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/admin/home" {{-- class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a> --}}
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="/jmlRuangan"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ruangan</a>
                    </li>
                    <li>
                        <a href="/peminjam"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Peminjam</a>
                    </li>
                    {{-- <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li> --}}
                </ul>
            </div>

        </div>
    </nav>
    <div class="border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 mx-16 my-8 p-6">
        {{-- p-6 : jarak dari border ke dalam isi kotak  --}}
        <form action="{{ route('simpan-ruangan') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="grid gap-6 mb-6">
                <div>
                    <label for="namaruang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Ruangan</label>
                    <input type="text" id="namaruang" name="namaruang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ruang Undercroft" required>
                </div>
                <div>
                    <label for="capacity"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas Ruangan</label>
                    <input type="text" id="kapasitas" name="kapasitas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="30" required>
                </div>
                <div>
                    <label for="building"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gedung</label>
                    <input type="text" id="gedung" name="gedung"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="A" required>
                </div>
                <div>
                    <label for="floor"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lantai</label>
                    <input type="text" id="lantai" name="lantai"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="2" required>
                    {{-- pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3 --}}
                </div>
                <div>
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="alamat" name="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Jl. Jenderal Sudirman No.Kav. 9, RT.1/RW.3, Gelora" required>
                </div>
                <div>
                    <label for="desc"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ruang Undercroft menyediakan fasilitas modern untuk berbagai kegiatan, mulai dari pertemuan pemerintahan hingga acara sosial. Dengan lokasi strategis dan kapasitas yang besar, ruang ini menjadi pilihan utama di tengah kota."
                        required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input">Upload file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" name="file_input "type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF
                        (MAX. 800x400px).</p>
                </div>

                <button type="submit"
                    class="relative max-w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>

        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>


    <!-- Inisialisasi datepicker -->
    {{-- <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script> --}}
</body>

</html>
