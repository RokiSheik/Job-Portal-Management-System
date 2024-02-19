<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Management System</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-slate-200">
    <header class="bg-slate-900 text-white">
        @include('components.nav')
    </header>
    <main>
     @include('components.banner')
     @include('components.topCompanies')
     @include('components.jobList')
     @include('components.jobs')
    </main>
    
    @include('components.footer')

</body>

</html>