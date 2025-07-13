<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voyages Hajj & Omra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 min-h-screen text-white">

    @include('components.nav')

    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-2 animate-fade-in-down">🕋 Voyages Hajj & Omra</h1>
            <p class="text-purple-200 text-lg">Partez en voyage spirituel en toute confiance avec nos offres.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($hadjs as $voyage)
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transform hover:scale-[1.03] transition duration-300">
                    <img src="{{ asset('storage/' . $voyage->image) }}" alt="{{ $voyage->titre }}" class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold mb-2">{{ $voyage->titre }}</h2>
                        <p class="text-sm text-purple-200 mb-4 line-clamp-3">{{ $voyage->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="bg-cyan-600 text-white px-3 py-1 rounded-full text-sm">{{ $voyage->prix }} DA</span>
                            <a href="{{ route('voyages.show', $voyage->id) }}" class="text-cyan-300 hover:text-cyan-100 transition duration-300">Voir détails →</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-white text-lg">
                    Aucun voyage Hajj ou Omra disponible pour le moment.
                </div>
            @endforelse
        </div>
    </div>

    @include('components.footer')

</body>
</html>
<script>
    // Animation pour les titres
    document.addEventListener('DOMContentLoaded', function() {
        const titles = document.querySelectorAll('h1, h2');
        titles.forEach(title => {
            title.classList.add('animate-fade-in-down');
        });
    });