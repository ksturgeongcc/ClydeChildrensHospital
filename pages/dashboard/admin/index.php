<?php
	include '../../../components/header.php';
    include '../../../components/navigation.php';
    include '../../../config/dbConfig.php';

    $userDetails = $conn->prepare("SELECT 
   SUM(CASE when guardian IS NULL THEN 1 ELSE 0 END) from patient_details

   
  ");
$userDetails->execute();
$userDetails->store_result();
$userDetails->bind_result($guardianCount);
$userDetails->fetch();
?>


<section class="mx-auto max-w-6xl py-12">
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                <div slot="middle-left" class="max-w-2xl">
                    <div class="flex flex-row">
                        <div class="w-2/3 bg-orange-600 p-5 text-teal-100 flex justify-center items-center h-48 text-3xl font-black uppercase">Admin Dashboard</div>
                        <div class="w-1/3 bg-teal-600 text-orange-100 p-5 flex justify-center items-center">Please review everthing listed below</div>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center mr-0 md:mr-2">
                <div slot="bottom-left" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Guardian Details required</div>
                        <div class="text-xl font-bold mb-2"><?= $guardianCount ?></div>
                        <div class="truncate"></div>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center mx-0 md:mx-4">
                <div slot="bottom-center" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Blog post</div>
                        <div class="text-xl font-bold mb-2">Big case study</div>
                        <div class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut vel facilis iste, dicta est minus alias, aliquam, velit nisi quo assumenda porro dignissimos doloremque temporibus eum saepe aspernatur ab.</div>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center ml-0 md:ml-2">
                <div slot="bottom-right" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Blog post</div>
                        <div class="text-xl font-bold mb-2">Big case study</div>
                        <div class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut vel facilis iste, dicta est minus alias, aliquam, velit nisi quo assumenda porro dignissimos doloremque temporibus eum saepe aspernatur ab.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


