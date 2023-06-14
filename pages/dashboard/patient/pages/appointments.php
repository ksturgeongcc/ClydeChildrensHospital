<?php

include '../../../../config/dbConfig.php';
include '../../../../components/header.php';
include '../../../../components/navigation.php';
$uid = $_SESSION['id'];
include '../models/patientDetails.php';
include '../models/apptDetails.php';
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

 
    
<section class="justify-center flex z-50 dark:bg-slate-500 transition-all duration-300">

<!--Cards-->
    <section id="main-body" class=" mt-11 md:w-5/6 w-full dark:bg-slate-500">
    <div class="mt-8 px-4">
            <hr>

            <h2 class="text-lg font-semibold p-2 dark:text-gray-50"><?= $userFirstname ?>'s Appointment Details</h2>
            <h4 class="text-base text-gray-500 p-1 dark:text-gray-200">You are coming to hospital for a <?= $apptTitle ?></h4>
            <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio nobis voluptas? Fugit maiores repellat aut commodi in. Nobis officiis blanditiis sequi iste molestias pariatur ut nam corrupti provident distinctio consequatur iure enim praesentium necessitatibus aliquid, numquam exercitationem error fuga tempora, voluptatum omnis eveniet harum fugit aut? Tempore, ea. Nisi.</p>
        </div>
        <div class="p-2">
            <div class="flex flex-wrap justify-between">
                <div class="md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 card1 border-gray-50 shadow-lg m-4 p-2">
                        <a href="" class="leading-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-2xl leading-10"><?= $apptTitle ?></p>
                                </div>
                                <div>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                        </svg>                                      
                                    </i>
                                </div>
                            </div>
                           <div class="border-t-2 border-white"></div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm leading-10">Next Appointment: <?= $newDate ?></p>
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>                                      
                                </i>
                            </div>
                            <div class="flex justify-between items-center">
                               <?= $aDescription ?>
                            </div>
                        </a>
                    </div>
                   
                </div>
                <div class="md:w-1/4 sm:w-1/2 w-full">
                    <div class="card2 border-2 border-gray-50 shadow-lg m-4 p-2">
                        <a href="" class="leading-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-2xl leading-10">X-ray Video</p>
                                    <p class="text-lg leading-10"></p>
                                </div>
                                <div>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                        </svg>                                      
                                    </i>
                                </div>
                            </div>
                           <div class="border-t-2 border-white"></div>
                            <div class="flex justify-between items-center">
                            <iframe width="100%" height="315" src="<?= $aVideo ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                               
                            </div>
                        </a>
                    </div>
                   
                </div>
                <div class="md:w-1/4 sm:w-1/2 w-full">
                    <div class="card3 border-2 border-gray-50 shadow-lg m-4 p-2">
                        <a href="" class="leading-10">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-2xl leading-10">Directions</p>
                                    <p class="text-lg leading-10"></p>
                                </div>
                                <div>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                        </svg>                                      
                                    </i>
                                </div>
                            </div>
                           <div class="border-t-2 border-white"></div>
                            <div class="flex justify-between items-center">
                              <img src="assets/images/hospital-map.png" alt="" >
                            </div>
                        </a>
                    </div>
                   
                </div>
                
            </div>
        </div>     <div class="mt-8 px-4">
            <hr>
            <h2 class="text-lg font-semibold p-2 dark:text-gray-50"><?= $deptName ?> Department Details</h2>
            <h4 class="text-base text-gray-500 p-1 dark:text-gray-200">This Section Show Your User Information</h4>
            <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio nobis voluptas? Fugit maiores repellat aut commodi in. Nobis officiis blanditiis sequi iste molestias pariatur ut nam corrupti provident distinctio consequatur iure enim praesentium necessitatibus aliquid, numquam exercitationem error fuga tempora, voluptatum omnis eveniet harum fugit aut? Tempore, ea. Nisi.</p>
        </div>
        <div class="flex flex-col items-center justify-center  text-gray-700 bg-gray-100">

	<!-- Component Start -->
	<div class="flex flex-wrap items-center justify-center w-full max-w-4xl mt-8">
		<div class="flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Staff Nurse</span>
				<div class="flex items-center">
					<span class="text-3xl"><?= $snName ?></span>
				</div>
			</div>
			<div class="p-10 staff">
                <img src="assets/images/staff/<?= $snImg ?>" alt="<?= $snName ?>">
			</div>
			
		</div>

		<!-- Tile 2 -->
		<div class="flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Doctor</span>
				<div class="flex items-center">
					<span class="text-3xl"><?= $dName ?></span>
				</div>
			</div>
			<div class="p-10 staff">
                <img src="assets/images/staff/<?= $dImg ?>" alt="<?= $dName ?>">
			</div>
			
		</div>

		<!-- Tile 3 -->
		<div class="flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Ward Nurse</span>
				<div class="flex items-center">
					<span class="text-3xl"><?= $nName ?></span>
				</div>
			</div>
			<div class="p-10 staff">
                <img src="assets/images/staff/<?= $nImg ?>" alt="<?= $nName ?>">
			</div>
			
		</div>
	</div>
	<!-- Component End  -->

</div>
    </section>
<!--End Cards-->
</section>
