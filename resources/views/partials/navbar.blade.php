<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="w-screen bg-teal-500 h-fit overflow-hidden">
        <div class="py-4 lg:px-8 px-4 max-w-[1280px] h-16 m-auto text-white flex items-center justify-between">
            <div>
                <h1 class="lg:text-2xl text-xl tracking-wider cursor-pointer font-bold font-serif">Green Company</h1>
            </div>
            <div class="flex lg:gap-8 gap-6 uppercase tracking-wider cursor-pointer text-lg items-center" id="navItems">
                <a  href="/" class="group font-serif" >
                    Accueil
                    <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                </a>
                <a href="{{route('employe')}}" class="group font-serif">
                    Employés
                    <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                </a>
                <a href="#" class="group font-serif">
                    Contact
                    <div class="w-0 group-hover:w-full h-0.5 bg-white ease-in-out duration-500"></div>
                </a>
            </div>
            <div id="hamburger" class="fa fa-bars flex items-center text-xl" style="display:none;"></div>
            <div id="mobileNav"
                class="fixed flex flex-col gap-8 pt-16 px-4 text-xl uppercase bg-teal-500 h-full inset-0 top-16 w-[70%] left-[-70%] ease-in-out duration-500 cursor-pointer">
                <span>Accueil</span>
                <span>Employés</span>
                <span>Contact</span>
            </div>
        </div>
    </nav>

    <script>
        var navItems = document.getElementById("navItems");
        var mobileNav = document.getElementById("mobileNav");
        var hamburger = document.getElementById("hamburger");


        function adjustNavbar() {
            screenWidth = parseInt(window.innerWidth);

            if (screenWidth < 541) {
                navItems.style.display = "none";
                hamburger.style.display = "flex";
            }
            else {
                navItems.style.display = "flex";
                hamburger.style.display = "none";
            }
        }

        adjustNavbar();

        window.addEventListener("resize", adjustNavbar);

        hamburger.addEventListener("click", function () {
            mobileNav.classList.toggle("left-[-70%]");
            hamburger.classList.toggle("fa-bars");
            hamburger.classList.toggle("fa-close");
        })
    </script>
</body>

</html>