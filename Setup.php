<?php 
include('Connect.php');

// $create="Create table Admins
// (
//     AdminID int NOT NULL Primary Key Auto_Increment,
//     AdminName varchar(30),
//     AdminPhNo varchar(30),
//     AdminEmail varchar(30),
//     AdminPassword varchar(30),
//     AdminAddress varchar(220),
// 	   AdminPosition varchar(30)
// )";

//  $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Admin Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table Customers
// (
//     CustomerId int NOT NULL Primary Key Auto_Increment,
//     CustomerFirstName varchar(30),
//     CustomerSurname varchar(30),
//     CustomerEmail varchar(30),
//     CustomerPh varchar(30),
//     CustomerPassword varchar(30),
//     CustomerAddress varchar(220),
//     Viewcount int
// )";

//  $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Customer Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table Campsite
// (
//     CampsiteID int NOT NULL Primary Key Auto_Increment,
//     CampsiteName varchar(30),
//     CampstieLocation varchar(30)
   
// )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Campsite Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table PitchType
// (
//     PitchTypeID int NOT NULL Primary Key Auto_Increment,
//     PitchTypeName varchar(30)
   
// )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "PitchType Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table Contact
// (
//     ContactID int NOT NULL Primary Key Auto_Increment,
//     ContactMessage varchar(200),
//     PhNo varchar(30),
//     Email varchar (50)

// )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Contact Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table Reviews
// (
//     ReviewID int NOT NULL Primary Key Auto_Increment,
//     CustomerID int,
//     ReviewMessage varchar(200),
//     Foreign Key (CustomerID) references Customers(CustomerID)
//     )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Review Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $drop="DROP table Reviews";
// $que=mysqli_query($connect, $drop);

// $create="Create table Pitch
// (
//     PitchID int NOT NULL Primary Key Auto_Increment,
//     PitchName varchar(50),
//     PitchImage varchar(255),
//     location varchar(255),

//     FNm1 varchar (50),
//     FNm2 varchar (50),
//     FNm3 varchar (50),

//     FImg1 varchar (255),
//     FImg2 varchar (255),
//     FImg3 varchar (255),

//      FDes1 varchar (255),
//      FDes2 varchar (255),
//      FDes3 varchar (255),

//     LANm1 varchar (50),
//     LANm2 varchar (50),
//     LANm3 varchar (50),

//     LAImg1 varchar (255),
//     LAImg2 varchar (255),
//     LAImg3 varchar (255),

//      LDes1 varchar (255),
//      LDes2 varchar (255),
//      LDes3 varchar (255),

//     Price int,
//     Description varchar(200),
//     Status varchar(50),
//     CampsiteID int,
//     PitchTypeID int,

//     Foreign Key (CampsiteID) references Campsite (CampsiteID),

//     Foreign Key (PitchTypeID) references PitchType (PitchTypeID)
//     )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Pitch Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

// $create="Create table Bookings
// (
//     BookingID int NOT NULL Primary Key Auto_Increment,
//     BookingDate date,
//     PitchID int,
//     BookingStatus varchar(50),
//     Price int,
//     Subtotal int,
//     Tax int,
//     CustomerEmail varchar (50),
//     BookingQty int,
//     PaymentType varchar(30),
//     CustomerID int,
//     Foreign Key (PitchID) references Pitch(PitchID)
//     Foreign Key (CustomerID) references Customers(CustomerID)
// )";

// $query=mysqli_query($connect,$create);
// if ($query)
// {
//  echo "Booking Table Successful";
// }
// else
// {
//  echo "Error in statement";
// }

?>

