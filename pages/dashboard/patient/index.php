<?php
	include '../../../components/header.php';
    include '../../../components/navigation.php';
    include '../../../config/dbConfig.php';
    
    $uid = $_SESSION['id'];
    include 'models/patientDetails.php';
    include 'models/apptDetails.php';
?>
  <div class="text-black h-screen" style="background: url('assets/images/hospital_bg.jpeg') no-repeat fixed center; background-size: cover;">
            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white-8 h-full">
              <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                <div class="w-full mb-8">
                  <h2 class="font-bold text-2xl">Hi <?= $userFirstname ?> <?= $userSurname ?>, welcome to your portal</h2>
                  <p>All your information all in one place.</p>
                </div>
                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-bold mb-2">Appointment</h3>
                  </div>
                  <?php if(isset($apptTitle)) : ?>
                  <p class="text-sm">You are coming to hospital to have the following pocedure: </p> 
                  <p class="bg-blue-700 text-white p-1 m-5 text-center"><?= $apptTitle ?></p>
                  <?php else : ?>
                    <p class="text-sm">Your appointment has not been set. Check back later.</p>
                    <?php endif ?>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="appointments" class="bold border-b-2 border-blue-300">View all appointment details</a>
                  </div>
                  </div>
                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-bold mb-2">Your Details</h3>
                  </div>
                  <p class="text-sm">View your personal information.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="account" class="bold border-b-2 border-blue-300">Find out more...</a>
                  </div>
                  </div>
                <div class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    
                    <h3 class="font-bold text-xl text-bold mb-2">Games</h3>
                  </div>
                  <p class="text-sm">Play Games</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="games" class="bold border-b-2 border-blue-300">View game options...</a>
                  </div>
                  </div>
                
              </div>
            </div>
          </div>
          <?php include '../../../components/footer.php'; ?>
