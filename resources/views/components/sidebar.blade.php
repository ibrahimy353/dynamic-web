<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plezo Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH2xDM1gRy33dCgFp15f+8RV8ZOd9nc5ZdZD9McYYX04B5J6Gzg12h7o2Fu3eCrI+0x9ULcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 w-full h-full m-0">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="flex-grow">
                <ul class="space-y-2 p-4">
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('slides')">
                            <i class="fa fa-fw fa-ship"></i>
                            <span class="ml-2">Hero Section</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="slides" class="pl-4 hidden">
                            <li>
                                <a href="{{ route('herosection') }}" class="block p-2 hover:bg-gray-700 rounded">Insert
                                    Slide</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Insert Content</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View
                                    Slides</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('howitworks')">
                            <i class="fa fa-fw fa-book"></i>
                            <span class="ml-2">How It Works Content</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="howitworks" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Insert Content</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View Content</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('casestudies')">
                            <i class="fa fas fa-briefcase"></i>
                            <span class="ml-2">Case Studies</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="casestudies" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Case Studies Content</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View Case Studies</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('partners')">
                            <i class="fa fa-connectdevelop"></i>
                            <span class="ml-2">Partners</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="partners" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Insert Partners Logos</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View Partners Logo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('pricing')">
                            <i class="fa fa-dollar"></i>
                            <span class="ml-2">Pricing</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="pricing" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Add
                                    Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View
                                    Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('testimonial')">
                            <i class="fa fa-comments-o"></i>
                            <span class="ml-2">Testimonial</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="testimonial" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Add Testimonial</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('aboutus')">
                            <i class="fa fa-users"></i>
                            <span class="ml-2">About Us</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="aboutus" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Add
                                    About Us</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View
                                    About Us</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 hover:bg-gray-700 rounded"
                            onclick="toggleMenu('terms')">
                            <i class="fa fa-files-o"></i>
                            <span class="ml-2">Terms</span>
                            <i class="fa fa-fw fa-caret-down ml-auto"></i>
                        </a>
                        <ul id="terms" class="pl-4 hidden">
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">Insert Terms</a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-gray-700 rounded">View Terms</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" class="flex items-center p-2 hover:bg-gray-700 rounded">
                            <i class="fa fa-fw fa-power-off"></i>
                            <span class="ml-2">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-4 overflow-auto">
            <!-- Your main content goes here -->
        </div>
    </div>

    <script>
        function toggleMenu(menuId) {
            const menu = document.getElementById(menuId);
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>
