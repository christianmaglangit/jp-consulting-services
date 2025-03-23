<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite('resources/css/app.css')
  <title>JP Consulting & Services</title>
</head>
<body style="background-color: #f3ebeb;">
    <nav class="flex justify-around items-center fixed top-0" style="background-color: #f3ebeb; width: 100%; z-index: 100; ">
        <ul class="flex justify-start items-center">
            <h1 class="flex justify-around items-center"><img src="resources/images/logo.jpg" alt="JPLogo" width="60" height="60"></h1>
            <li><a href="#"><p class="my-6 mx-6 font-label-bold-small clickable opacity-70 hover:opacity-100 transition-opacity duration-300 text-xs font-medium">Home</p></a></li>
            <li><a href="#"><p class="my-6 mx-6 font-label-bold-small clickable opacity-70 hover:opacity-100 transition-opacity duration-300 text-xs font-medium">About Us</p></a></li>
            <li><a href="#"><p class="my-6 mx-6 font-label-bold-small clickable opacity-70 hover:opacity-100 transition-opacity duration-300 text-xs font-medium">Services</p></a></li>
            <li><a href="#"><p class="my-6 mx-6 font-label-bold-small clickable opacity-70 hover:opacity-100 transition-opacity duration-300 text-xs font-medium">Contact us</p></a></li>
        </ul>
        <p class="text-xs font-medium">English</p>
    </nav>
    <div class="bg-cover bg-center bg-no-repeat flex justify-around items-center" 
    style="background-image: url('resources/images/home2.jpg'); height: 80vh; position: relative;">
    
    <div class="justify-start items-start relative z-10">
        <h1 class="font-bold" style="color:#ffe14d; font-size: 3.5rem">JP Consulting & Services</h1>
        <p class="font-bold" style="color:#f3ebeb; font-size: 1.7rem">Expert business solutions and IT services tailored to your needs.</p>

        <div class="flex justify-start items-center" style="margin-top: 1rem; gap: 0.5rem;">
            <button type="button" class="text-1xl p-2 px-4 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-in-out"
                style="color:#000000; background-color: #ffe14d; border-color: #ffe14d; border-radius: 19px; position: relative; z-index: 20;">
                View Our Services
            </button>
            <button type="button" class="text-1xl p-2 px-4 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-in-out"
                style="color:#000000; background-color: #ffe14d; border-color: #ffe14d; border-radius: 19px; position: relative; z-index: 20;">
                Contact Us Today
            </button>
        </div>
    </div>
</div>
<div style="background-color: #27272B;">
    <div class=" justify-center items-center" style="background-color: #27272B; margin: 0 auto; padding: 2rem; width: 70%; padding-bottom: 5rem;">
        <h1 class="font-medium" style="font-size: 3rem; color: #ffe14d;"> About Us</h1>
        <div class="flex justify-between" style="gap:5rem; margin-top: 2rem;">
            <div style="width: 30%;">
                <h3 class="font-medium" style="font-size: 1.5rem; color: #ffe14d;">Our Mission</h3>
                <p class="font-light " style="font-size: 1.2rem; color: #f3ebeb; margin-top: 1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi placeat quis ad nostrum nobis, iste quo quasi culpa esse non?</p>
            </div>
            <div style="width: 30%;">
                <h3 class="font-medium" style="font-size: 1.5rem; color: #ffe14d;">Expert Team</h3>
                <p class="font-light" style="font-size: 1.2rem; color: #f3ebeb; margin-top: 1rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio impedit tenetur alias, laborum illum possimus optio aspernatur ullam consectetur veritatis?</p>
            </div>
            <div style="width: 30%;">
                <h3 class="font-medium" style="font-size: 1.5rem; color: #ffe14d;">Industry Partners</h3>
                <p class="font-light" style="font-size: 1.2rem; color: #f3ebeb; margin-top: 1rem;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro provident facilis dolorum similique impedit ipsa quidem in nulla? Numquam, tenetur..</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div class=" justify-center items-center" style="background-color: #27272B; margin: 5rem auto; padding: 2rem; width: 70%; border-radius: 20px; padding-bottom: 5rem;">
        <h1 class="font-medium" style="font-size: 3rem; color: #ffe14d; margin-top: 1rem;">Our Services</h1>
        <div class="flex justify-between" style="gap: 5rem; margin-top: 2rem;">
            <div style="width: 100%;">
                <div class="flex justify-start " style="margin-bottom: 3rem;">
                    <h2 class="font-medium" style="font-size: 2rem; color: #f3ebeb; ">IT Services Excellence</h2>
                </div>
                <div class="flex justify-start" style="gap: 1rem; margin-top: 1rem;">
                    <div >
                        <div class="flex justify-start items-center gap-4">
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">1</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">Computer Programming</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Custom software solutions built to address your unique business challenges</p>
                    </div>
                    <div>
                        <div class="flex justify-start items-center gap-4" >
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">2</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">IT Consultancy</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Strategic tech guidance to optimize your operations and growth.</p>
                    </div>
                    <div>
                        <div class="flex justify-start items-center gap-4">
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">3</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">Facilities Management</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Comprehensive IT infrastructure oversight and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="justify-center items-center" style="background-color: #27272B; margin: 0 auto; padding: 2rem; width: 70%; border-radius: 20px; padding-bottom: 5rem;"" style="width: 100%;">
        <div class="flex justify-end " style="margin-bottom: 3rem;">
            <h2 class="font-medium" style="font-size: 2rem; color: #f3ebeb; ">Business Solutions</h2>
        </div>
        <div class="flex justify-start" style="gap: 1rem; margin-top: 1rem;">
            <div >
                <div class="flex justify-start items-center gap-4">
                    <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">1</h1>
                    <h2 class="font-medium" style="color: #ffe14d;">Management Consultancy</h2>
                </div>
                <p class="mx-3" style="color: #f3ebeb;">Strategic planning and operational efficiency solutions.</p>
            </div>
            <div>
                <div class="flex justify-start items-center gap-4" >
                    <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">2</h1>
                    <h2 class="font-medium" style="color: #ffe14d;">Corporate Services</h2>
                </div>
                <p class="mx-3" style="color: #f3ebeb;">Legal compliance and corporate structure optimization.</p>
            </div>
            <div>
                <div class="flex justify-start items-center gap-4">
                    <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">3</h1>
                    <h2 class="font-medium" style="color: #ffe14d;">Employment Solutions</h2>
                </div>
                <p class="mx-3" style="color: #f3ebeb;">Talent acquisition and workforce planning expertise.</p>
            </div>
        </div>
    </div>

    <div class=" justify-center items-center" style="background-color: #27272B; margin: 5rem auto; padding: 2rem; width: 70%; border-radius: 20px; padding-bottom: 5rem;">
        <div class="flex justify-between" sstyle="margin-bottom: 3rem;">
            <div style="width: 100%;">
                <div class="flex justify-start " style="margin-bottom: 3rem;">
                    <h2 class="font-medium" style="font-size: 2rem; color: #f3ebeb; ">Retail & Application Services</h2>
                </div>
                <div class="flex justify-start" style="gap: 1rem; margin-top: 1rem;">
                    <div >
                        <div class="flex justify-start items-center gap-4">
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">1</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">Retail Trade Solutions</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Specialized consulting for non-traditional retail businesses. We optimize operations beyond physical stores.</p>
                    </div>
                    <div>
                        <div class="flex justify-start items-center gap-4" >
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">2</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">Application Management</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Comprehensive follow-up services ensure your business applications run smoothly. We handle updates and troubleshooting.</p>
                    </div>
                    <div>
                        <div class="flex justify-start items-center gap-4">
                            <h1 class="p-2" style="background-color: #f3ebeb; border-radius: 10px;">3</h1>
                            <h2 class="font-medium" style="color: #ffe14d;">Technology Integration</h2>
                        </div>
                        <p class="mx-3" style="color: #f3ebeb;">Seamless connection between your retail operations and IT systems. Our experts create efficient workflows.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #ffe14d; padding: 0.5rem;">
    <div class=" justify-center items-center" style="background-color: #27272B; margin: 5rem auto; padding: 2rem; width: 70%; border-radius: 20px;">
        <h1 class="font-medium" style="font-size: 3rem; color: #ffe14d;"> Contact Us</h1>
        <div class="flex justify-between" style="gap:5rem; margin-top: 2rem;">
            <div style="width: 30%; ">
                <h3 class="font-medium" style="font-size: 1.5rem; color: #ffe14d; padding: 1rem; ">Email Us</h3>
                <form action="" method="get" style="background-color: #f3ebeb; padding: 1rem; border-radius: 15px; width: 50vw; gap: 1rem;">
                    <input type="text" name="email" id="email" placeholder="Email" class="p-2 px-4 my-2" style="width: 100%; border-radius: 10px; border: #27272B;">
                    <input type="text" name="subject" id="subject" placeholder="Subject" class="p-2 px-4 my-2" style="width: 100%; border-radius: 10px;">
                    <textarea name="message" id="message" placeholder="Message" class="p-2 px-4 my-2" style="width: 100%; border-radius: 10px;"></textarea>
                    <button type="submit" class="text-1xl p-2 px-4 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-in-out"
                        style="color:#000000; background-color: #FFD700; border-color: #27272B; border-radius: 19px; position: relative; z-index: 20;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
   
<div style="background-color: #ffffff;">
    <div style="padding: 5rem">
        <h1 class="font-bold text-2xl" style="color: #27272B;">JP Consulting & Services LLC </h1>
        
        <p>Expert business solutions and IT services tailored to your needs.</p>
        <span>All Rights Reserved</span>
    </div>
</div>

</body>
</html>