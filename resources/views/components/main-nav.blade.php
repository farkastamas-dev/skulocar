<div class="main-nav max-w-6xl h-full mx-auto px-3 flex items-center justify-between">

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Skulocar" class="h-10">
    </div>
    <nav class="h-full">
        <div class="nav-links flex items-center gap-5 text-sm h-full">
            <ul class="mainmenu flex h-full items-center gap-5">
                <li class="h-full flex items-center"><a href="/" title="Kezdőlap" class="font-links text-white decoration-none hover:text-[#ff9000] font-bold h-full flex items-center transition-colors duration-300 uppercase relative underline-animated">Kezdőlap</a></li>
                <li class="font-links text-white decoration-none cursor-pointer hover:text-[#ff9000] font-bold transition-colors duration-300 uppercase relative group h-full flex items-center gap-2 underline-animated">
                    <span class="flex items-center gap-1 relative">Szervíz
                        <i class="fa-solid fa-plus text-sm relative transition-all duration-300 -top-[1px] text-[#ff9000] group-hover:opacity-0" id="plus-icon"></i>
                        <i class="fa-solid fa-minus text-sm transition-all duration-300 text-[#ff9000] -top-[1px] opacity-0 group-hover:opacity-100 relative" id="minus-icon"></i></span>
                    <ul class="sub-menu absolute top-full left-0 bg-[hsl(0,0%,5%)] border-2 border-white min-w-[200px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <li class=""><a href="/" title="Általános javítás" class="font-links text-white decoration-none p-6 hover:text-[#ff9000] hover:bg-black/80 transition-colors duration-300 uppercase block px-6 py-5 border-b border-gray-700 last:border-b-0">Általános javítás</a></li>
                        <li class=""><a href="/" title="Motorjavítás" class="font-links text-white decoration-none p-6 hover:text-[#ff9000] hover:bg-black/80 transition-colors duration-300 uppercase block px-6 py-5 border-b border-gray-700 last:border-b-0">Motorjavítás</a></li>
                        <li class=""><a href="/" title="Fékjavítás" class="font-links text-white decoration-none p-6 hover:text-[#ff9000] hover:bg-black/80 transition-colors duration-300 uppercase block px-6 py-5 border-b border-gray-700 last:border-b-0">Fékjavítás</a></li>
                        <li class=""><a href="/" title="Klímajavítás" class="font-links text-white decoration-none p-6 hover:text-[#ff9000] hover:bg-black/80 transition-colors duration-300 uppercase block px-6 py-5 border-b border-gray-700 last:border-b-0">Klímajavítás</a></li>
                        <li class=""><a href="/" title="Hanggenerátor" class="font-links text-white decoration-none p-6 hover:text-[#ff9000] hover:bg-black/80 transition-colors duration-300 uppercase block px-6 py-5 border-b border-gray-700 last:border-b-0">Hanggenerátor</a></li>
                    </ul>
                </li>
                <li class="h-full flex items-center"><a href="/" title="Autókozmetika" class="font-links text-white decoration-none hover:text-[#ff9000] font-bold transition-colors h-full flex items-center duration-300 uppercase relative underline-animated">Autókozmetika</a></li>
                <li class="h-full flex items-center"><a href="/" title="Alkatrész" class="font-links text-white decoration-none hover:text-[#ff9000] font-bold transition-colors h-full flex items-center duration-300 uppercase relative underline-animated">Alkatrész</a></li>
                <li class="h-full flex items-center"><a href="/" title="Felni/Gumi" class="font-links text-white decoration-none hover:text-[#ff9000] font-bold transition-colors h-full flex items-center duration-300 uppercase relative underline-animated">Felni/Gumi</a></li>
                <li class="h-full flex items-center"><a href="/" title="Kapcsolat" class="font-links text-white decoration-none hover:text-[#ff9000] font-bold transition-colors h-full flex items-center duration-300 uppercase relative underline-animated">Kapcsolat</a></li>
            </ul>
        </div>
    </nav>
</div>

<style>
    .underline-animated {
        position: relative;
    }

    .underline-animated::after {
        content: '';
        position: absolute;
        bottom: 30px;
        left: 50%;
        width: 0;
        height: 3px;
        background-color: #ff9000;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .underline-animated:hover::after {
        width: 50%;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const serviceItem = document.querySelector('.group');
        const plusIcon = document.getElementById('plus-icon');
        const minusIcon = document.getElementById('minus-icon');
        
        if (serviceItem && plusIcon && minusIcon) {
            serviceItem.addEventListener('mouseenter', function() {
                plusIcon.style.opacity = '0';
                minusIcon.style.opacity = '1';
            });
            
            serviceItem.addEventListener('mouseleave', function() {
                plusIcon.style.opacity = '1';
                minusIcon.style.opacity = '0';
            });
        }
    });
</script>