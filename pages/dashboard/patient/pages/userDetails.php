<?php
	include '../../../../components/header.php';
    include '../../../../components/navigation.php';
    include '../../../../config/dbConfig.php';
    
    $uid = $_SESSION['id'];

    $userDetails = $conn->prepare("SELECT 
        u.id,
        u.firstname,
        u.surname,
        u.email,
        u.guardian,
        login_details_id

       FROM patient_details u
       where login_details_id = 10

       
      ");
$userDetails->execute();
$userDetails->store_result();
$userDetails->bind_result($userId, $userFirstname, $userSurname, $userEmail, $userActive, $guardian);
$userDetails->fetch();
?>
  <li class="hoverable hover:bg-blue-800 hover:text-white">
            <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold bg-blue-800 text-white">Hover</a>
            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
              <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                <div class="w-full text-white mb-8">
                  <h2 class="font-bold text-2xl">Hi <?= $userFirstname ?>, welocome to your portal</h2>
                  <p>All your information all in one place.</p>
                </div>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Appointment</h3>
                  </div>
                  <p class="text-gray-100 text-sm">View the details of your appointment.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Your Details</h3>
                  </div>
                  <p class="text-gray-100 text-sm">View your personal information.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Games</h3>
                  </div>
                  <p class="text-gray-100 text-sm">This proposal is a win-win situation which will cause a stellar paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Find out more...</a>
                  </div>
                </ul>
                
              </div>
            </div>
          </li>