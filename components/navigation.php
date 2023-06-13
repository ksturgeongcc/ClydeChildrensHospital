<?php

?>
<nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
  <div class="container mx-auto flex justify-between">
    <div class="relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">Logo</div>
    <ul class="flex">
    <?php if (isset($_SESSION['loggedin'])): ?>
      <?php if($_SESSION['admin'] == 1) : ?>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="adminPanel" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Dashboard</a>
        </li>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="users" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Patients</a>
        </li>
      <!-- patient navigations -->
      <?php elseif($_SESSION['admin'] == 0) : ?>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="dashboard" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Dashboard</a>
        </li>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="details" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">My Details</a>
        </li>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="appointments" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">My Appointments</a>
        </li>
        <li class="hover:bg-blue-800 hover:text-white">
          <a href="" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Games</a>
        </li>
      <?php endif ?>
      <li class="hover:bg-blue-800 hover:text-white">
          <a href="logout" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Logout</a>
        </li>
    <?php endif ?>
  
        <?php if(!isset($_SESSION['loggedin']) && !isset($_SESSION['admin'])) :?>
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="login" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Login</a>
      </li>
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="register" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Register</a>
      </li>
      <?php endif ?>

      <li class="hover:bg-blue-800 hover:text-white">
          <a href="directions" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Directions</a>
        </li>
    
	  
        </ul>
      </div>
    </nav>