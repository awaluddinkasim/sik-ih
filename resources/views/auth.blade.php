<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>
        @if (isset($title))
            {{ $title }} | {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Css -->
    <!-- Main Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-indigo-600/[0.02]"></div>
        <div class="container-fluid relative">
            <div class="md:flex items-center">
                <div class="xl:w-[30%] lg:w-1/3 md:w-1/2">
                    <div
                        class="relative md:flex flex-col md:min-h-screen justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 md:px-10 py-10 px-4 z-1">
                        <div class="text-center">
                            <a href="/"><img src="assets/images/logo-icon-64.png" class="mx-auto"
                                    alt=""></a>
                        </div>
                        <div class="title-heading text-center md:my-auto my-20">
                            <form method="POST" action="{{ route('authenticate') }}" class="text-start"
                                autocomplete="off">
                                @csrf
                                <x-form.input type="email" name="email" label="Email" placeholder="Masukkan email"
                                    value="{{ old('email') }}" :required="true" />
                                <x-form.input type="password" name="password" label="Password"
                                    placeholder="Masukkan password" :required="true" />

                                <div class="mb-4">
                                    <div class="flex items-center mb-0">
                                        <input name="remember"
                                            class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2"
                                            type="checkbox" id="RememberMe">
                                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember
                                            me</label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <x-button.default type="submit" :full="true">Login</x-button.default>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="xl:w-[70%] lg:w-2/3 md:w-1/2 flex justify-center mx-6 md:my-auto my-20">
                    <img src="assets/images/contact.svg" class="w-3/4 lg:w-2/3 hidden md:flex" alt="">
                    <div>
                        <div class="relative">
                            <div class="absolute top-20 start-20 bg-indigo-600/[0.02] size-[1200px] rounded-full"></div>
                            <div class="absolute bottom-20 -end-20 bg-indigo-600/[0.02] size-[600px] rounded-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section -->
    <!-- End -->

    <div class="fixed bottom-3 end-3">
        <a href=""
            class="back-button size-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i
                data-feather="arrow-left" class="h-4 w-4"></i></a>
    </div>


    <!-- JAVASCRIPTS -->
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    @if (Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ Session::get('success') }}',
            })
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ Session::get('error') }}',
            })
        </script>
    @endif
    <!-- JAVASCRIPTS -->
</body>

</html>
