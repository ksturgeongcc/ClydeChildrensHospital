<?php 
    session_start();
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php';
    include '../../../../components/navigation.php'; 

    $userId = $_GET['uid'];

    $users = $conn->prepare('SELECT 
   
    u.username,
    u.email

   FROM users u

   where id = ' . $userId .'

   
  ');
$users->execute();
$users->store_result();
$users->bind_result($userName, $userEmail);
$users->fetch();

// total comments for the selected user
$commentCount = $conn->prepare('SELECT 
	
COUNT(fk_user_id)

FROM userBlog
WHERE fk_user_id ='. $userId .'
');
$commentCount->execute();
$commentCount->store_result();
$commentCount->bind_result($commentsTotal);
$commentCount->fetch();

?>
<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-between">
        <h6 class="text-blueGray-700 text-xl font-bold">
          My account
        </h6>
        <!-- <button onclick="window.location.href='../../comments';" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
          User comments (<?=$commentsTotal ?>)
        </button>
        <button onclick="window.location.href='../allUsers';" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
          All users
        </button> -->
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form action="../updateUser/<?= $userId ?>" method="post" >
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          User Information
        </h6>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Username
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?= $userName ?>" name="username">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Email address
              </label>
              <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?= $userEmail ?>" name="email">
            </div>
          </div>
          <button  class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">Update User </button>

        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
        
      </form>
    </div>
  </div>
</div>
</section>

