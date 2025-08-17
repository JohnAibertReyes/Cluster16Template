<?php
  include('db.php');
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <title>Dashboard</title>
</head>
<body>

    <!-- nav bar -->

   <!-- nav bar -->
<nav class="fixed bg-[#111111] top-0 z-50 w-full ">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="" class="flex ms-2 md:me-24">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Logistic 1</span>
        </a>
      </div>

      <div class="flex items-center">
          <!-- Philippine Time Display - Now beside notification -->
          <div class="hidden md:flex items-center text-white mr-4">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
            </svg>
            <span id="philippineTime" class="font-medium"></span>
          </div>
          

          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img id="profilePreview" class="w-8 h-8 rounded-full"
                  src="photos/<?= !empty($_SESSION['photo']) ? htmlspecialchars($_SESSION['photo']) : 'boy.png' ?>" 
                  alt="Profile Photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded-sm shadow-sm bg-blue-950" id="dropdown-user" style="background-color: black;">
              <div class="flex justify-center items-center p-2" style="background-color: black;">
                  <img id="profilePreview" class="w-20 h-20 rounded-full shadow-lg"
                    src="photos/<?= !empty($_SESSION['photo']) ? htmlspecialchars($_SESSION['photo']) : 'boy.png' ?>" 
                    alt="Profile Photo" style="background-color: black;">
              </div>
              <div class="px-4 py-3" role="none" style="background-color: black;">
                <div class="flex gap-1">
                  <p class="text-sm text-gray-900 text-white" role="none"><?php echo $name; ?> <?php echo $lastname; ?></p>
                </div>
                <p class="text-sm font-medium text-white-900 truncate text-gray-300" role="none"><?php echo $email; ?></p>
                
              </div>
              
              <ul class="py-1" role="none" style="background-color: black;">
                  <li>
                    
                  <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 text-white" role="menuitem" style="background-color: black;">Profile</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 text-white" role="menuitem" style="background-color: black;">Settings</a>
                </li>
                <li>
                  <a href="login.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 text-white" role="menuitem" style="background-color: black;">Sign out</a>
                </li>
                <div class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 text-white" role="menuitem" style="background-color: black;">

      
      
      
      
    </div>
  </div>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
<!-- nav bar -->


</div>

    <!-- side bar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full  sm:translate-x-0 bg-blue-950" aria-label="Sidebar" style="background-color: black;">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-blue-950 " style="background-color: black;">
      <div class="flex justify-center items-center mb-5 ">
         <img class="rounded-md shadow-lg w-36 h-36" src="logo.png" alt="">
      </div>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
             <svg viewBox="0 0 20 20" version="1.1" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>dashboard [#671]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -5199.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M294,5041 C298.411,5041 302,5044.589 302,5049 L295.406,5049 L299.197,5045.378 L297.815,5043.932 L292.511,5049 L286,5049 C286,5044.589 289.589,5041 294,5041 M294,5039 C288.477,5039 284,5043.477 284,5049 C284,5054.523 288.477,5059 294,5059 C299.523,5059 304,5054.523 304,5049 C304,5043.477 299.523,5039 294,5039" id="dashboard-[#671]"> </path> </g> </g> </g> </g></svg>
               <span class="ms-3">Dashboard</span> 
            </a>
         </li>

         <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" style="background-color: black;">
                 <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.4142 10.4142C18 9.82843 18 8.88562 18 7C18 5.11438 18 4.17157 17.4142 3.58579M17.4142 10.4142C16.8284 11 15.8856 11 14 11H10C8.11438 11 7.17157 11 6.58579 10.4142M17.4142 10.4142C17.4142 10.4142 17.4142 10.4142 17.4142 10.4142ZM17.4142 3.58579C16.8284 3 15.8856 3 14 3L10 3C8.11438 3 7.17157 3 6.58579 3.58579M17.4142 3.58579C17.4142 3.58579 17.4142 3.58579 17.4142 3.58579ZM6.58579 3.58579C6 4.17157 6 5.11438 6 7C6 8.88562 6 9.82843 6.58579 10.4142M6.58579 3.58579C6.58579 3.58579 6.58579 3.58579 6.58579 3.58579ZM6.58579 10.4142C6.58579 10.4142 6.58579 10.4142 6.58579 10.4142Z" stroke="#ffffff" stroke-width="1.128"></path> <path d="M13 7C13 7.55228 12.5523 8 12 8C11.4477 8 11 7.55228 11 7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7Z" stroke="#ffffff" stroke-width="1.128"></path> <path d="M18 6C16.3431 6 15 4.65685 15 3" stroke="#ffffff" stroke-width="1.128" stroke-linecap="round"></path> <path d="M18 8C16.3431 8 15 9.34315 15 11" stroke="#ffffff" stroke-width="1.128" stroke-linecap="round"></path> <path d="M6 6C7.65685 6 9 4.65685 9 3" stroke="#ffffff" stroke-width="1.128" stroke-linecap="round"></path> <path d="M6 8C7.65685 8 9 9.34315 9 11" stroke="#ffffff" stroke-width="1.128" stroke-linecap="round"></path> <path d="M5 20.3884H7.25993C8.27079 20.3884 9.29253 20.4937 10.2763 20.6964C12.0166 21.0549 13.8488 21.0983 15.6069 20.8138C16.4738 20.6734 17.326 20.4589 18.0975 20.0865C18.7939 19.7504 19.6469 19.2766 20.2199 18.7459C20.7921 18.216 21.388 17.3487 21.8109 16.6707C22.1736 16.0894 21.9982 15.3762 21.4245 14.943C20.7873 14.4619 19.8417 14.462 19.2046 14.9433L17.3974 16.3084C16.697 16.8375 15.932 17.3245 15.0206 17.4699C14.911 17.4874 14.7962 17.5033 14.6764 17.5172M14.6764 17.5172C14.6403 17.5214 14.6038 17.5254 14.5668 17.5292M14.6764 17.5172C14.8222 17.486 14.9669 17.396 15.1028 17.2775C15.746 16.7161 15.7866 15.77 15.2285 15.1431C15.0991 14.9977 14.9475 14.8764 14.7791 14.7759C11.9817 13.1074 7.62942 14.3782 5 16.2429M14.6764 17.5172C14.6399 17.525 14.6033 17.5292 14.5668 17.5292M14.5668 17.5292C14.0434 17.5829 13.4312 17.5968 12.7518 17.5326" stroke="#ffffff" stroke-width="1.128" stroke-linecap="round"></path> <rect x="2" y="14" width="3" height="8" rx="1.5" stroke="#ffffff" stroke-width="1.128"></rect> </g></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Procurement</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
              <li>
                     <a href="supplierrequest.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Supplier Request</a>
                  </li>
               <li>
                     <a href="supplierevaluation.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Supplier Evaluation</a>
                  </li>
                  <li>
                     <a href="purchaserequest.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Purchase Request</a>
                  </li>
                  <li>
                     <a href="purchaseorder.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Purchase Order</a>
                  </li>
                  <li>
                     <a href="itemmonitoring.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Item Monitoring</a>
                  <li>
                     <a href="disbursement.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Disbursement</a>
                  </li>

                  </li>
            </ul>
         </li>
        
        
        
         <li>
  <button type="button"  class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-warehousing" data-collapse-toggle="dropdown-warehousing">
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3 9L12 3L21 9V21H3V9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M9 22V12H15V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Warehousing</span>
    <svg class="w-3 h-3" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <ul id="dropdown-warehousing" class="hidden py-2 space-y-2">
    <li>
      <a href="inventorymanagement.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Inventory Management</a>
    </li>
    <li>
      <a href="receiving.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Receiving & Inspection</a>
    </li>
    <li>
      <a href="stocktransfer.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Stock Transfer</a>
    </li>
    <li>
      <a href="returns.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Returns & Disposal</a>
    </li>
    <li>
      <a href="reportsanalytics.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Reports & Analytics</a>
    </li>
  </ul>
</li>
        
        
<li>
  <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-project" data-collapse-toggle="dropdown-project">
    <!-- White Project Management Icon (Clipboard style) -->
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M9 2H15V4H9V2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M5 4H19V21H5V4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M9 10H15" stroke="white" stroke-width="2" stroke-linecap="round"/>
      <path d="M9 14H13" stroke="white" stroke-width="2" stroke-linecap="round"/>
    </svg>
    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Project Management</span>
    <svg class="w-3 h-3" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <ul id="dropdown-project" class="hidden py-2 space-y-2">
    <li>
      <a href="projproposal.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Project Proposal</a>
    </li>
    <li>
      <a href="projschedule.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Project Schedule</a>
    </li>
    <li>
      <a href="projbidding.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Project Bidding</a>
    </li>
    <li>
      <a href="projamount.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Project Amount</a>
    </li>
    <li>
      <a href="projtimeline.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Project Timeline</a>
    </li>
    <li>
      <a href="accomplishment.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Accomplishment</a>
    </li>
    <li>
      <a href="monitoring.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Monitoring</a>
    </li>
  </ul>
</li>
        
<li>
  <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-asset" data-collapse-toggle="dropdown-asset">
    <!-- White Asset Icon (Box style) -->
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3 7L12 12L21 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M12 22V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M3 7V17L12 22L21 17V7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Asset Management</span>
    <svg class="w-3 h-3" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <ul id="dropdown-asset" class="hidden py-2 space-y-2">
    <li>
      <a href="addasset.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Add Asset</a>
    </li>
    <li>
      <a href="assetlist.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Asset List</a>
    </li>
    <li>
      <a href="liquidation.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Liquidation</a>
    </li>
    <li>
      <a href="schedulem.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Schedule Maintenance</a>
    </li>
    <li>
      <a href="disposal.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Disposal</a>
    </li>
  </ul>
</li>
        
<li>
  <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-mro" data-collapse-toggle="dropdown-mro">
    <!-- White Gear/Wrench Icon for MRO -->
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M21 2L17.5 5.5M22 13.5L18.5 17M9 3L7.5 6L4 6.5L6.5 9L5.5 12L9 11L12 13L11 9L14 7.5L11 6L12 2.5L9 3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <circle cx="12" cy="17" r="2" stroke="white" stroke-width="2"/>
    </svg>
    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">MRO</span>
    <svg class="w-3 h-3" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L5 5L9 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
  <ul id="dropdown-mro" class="hidden py-2 space-y-2">
    <li>
      <a href="maintenance.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Maintenance Request</a>
    </li>
    <li>
      <a href="repair.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Repairs</a>
    </li>
    <li>
      <a href="overhaul.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Overhaul</a>
    </li>
    <li>
      <a href="inventory.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Inventory</a>
    </li>
    <li>
      <a href="records.php" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700">Records</a>
    </li>
  </ul>
</li>
      
      
      
    

      </ul>
   </div>
</aside>

<!-- sidebar -->


<!-- content -->
<div class="p-4 sm:ml-64">
   <div class="p-4   rounded-lg dark:border-gray-700 mt-14">

<!-- breadcrumb -->
  <div class="flex mb-5" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-black hover:text-blue-600">
        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
      Logistic 1
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-3 h-3 text-black mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="dashboard.php" class="ml-1 text-sm font-medium text-black text-blue-600 hover:text-blue-600 md:ml-2">Dashboard</a>
      </div>
    </li>
  </ol>
</div>

<!-- breadcrumb -->
      
       <!-- Main Content -->
       
        
        <!-- Main Content -->

        
         
   </div>
</div>








<!-- content -->

<!-- Fixed Footer -->
<footer class=" bg-[#111111] text-white fixed bottom-0 w-full w-52 p-3 shadow-lg sm:ml-30 flex justify-center items-center ">
 <div class="flex gap-5 items-center justify-center">
  <img class="rounded-full w-10 h-10" src="logo.png" alt="">
 <p class="text-sm text-gray-300">© 2025 Rest & Feast All rights reserved.</p>
 </div>
</footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
  function displayPhilippineTime() {
  // Create a date object for Philippine time (UTC+8)
  const options = {
    timeZone: 'Asia/Manila',
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit',
    hour12: true
  };

  // Get the formatted date and time string
  const philippineDateTime = new Date().toLocaleString('en-PH', options);
  
  // Update the element with the current time
  const timeElement = document.getElementById('philippineTime');
  if (timeElement) {
    timeElement.textContent = philippineDateTime;
  }
}

// Initial call to display the time
displayPhilippineTime();

// Update the time every second
setInterval(displayPhilippineTime, 1000);

// Add event listener to ensure the function runs after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  displayPhilippineTime();
});
</script>

</html>