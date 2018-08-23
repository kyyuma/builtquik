-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 04:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liftingpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `ContractID` int(11) NOT NULL,
  `ContractorName` varchar(100) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Trainees` varchar(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `SupplierID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`ContractID`, `ContractorName`, `ContactNumber`, `Region`, `Address`, `Qualification`, `Trainees`, `Type`, `SupplierID`) VALUES
(2, 'John Smith', 0, '', '', '', '', 'Electrician', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contractorcapability`
--

CREATE TABLE `contractorcapability` (
  `Capability` varchar(100) NOT NULL,
  `ContractorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractorequipment`
--

CREATE TABLE `contractorequipment` (
  `EquipmentID` int(11) NOT NULL,
  `ContractorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(16) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Region`, `PhoneNumber`, `FirstName`, `LastName`, `email`, `password`, `hash`) VALUES
(10000, 'Victoria', '0456567856', 'John', 'Smith', '', '', '0'),
(10002, 'Melbourne', '0406755454', 'Matt', 'Winslow', 'matthew.winslow96@gmail.com', '$2y$11$zls8kxqkSDtZ/R8oDjrM0OXNaGK9smbMPwVGlHMZBthStDHGpafu6', 'fb7b9ffa5462084c5f4e7e85a093e6d7'),
(10003, 'Victoria', '0455555555', 'Harry', 'Hazel', 'john@e.com', '$2y$11$c2AtIoPk0/J7FD7rXSiEAuBelb5RVLc/SQ0afNDxx6OIlD2yTovbm', 'e0c641195b27425bb056ac56f8953d24'),
(10004, 'Sydney', '0422222222', 'Kim', 'Day', 'sydney@e.com', '$2y$11$OcPQxmrPRt6Hs/OML8dGZeIOzsWN3/3dCSs5Y6fmI4xZlbSYFHwku', '3cf166c6b73f030b4f67eeaeba301103');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `epuipmentID` int(11) NOT NULL,
  `equipmentName` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `Capability` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`epuipmentID`, `equipmentName`, `type`, `SupplierID`, `Capability`) VALUES
(1, 'Forklift', 'Fabrication & Workshop Facilities', 0, 'stuff');

-- --------------------------------------------------------

--
-- Table structure for table `itemlist`
--

CREATE TABLE `itemlist` (
  `SupplierID` int(16) NOT NULL,
  `MaterialID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemlist`
--

INSERT INTO `itemlist` (`SupplierID`, `MaterialID`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 4),
(2, 5),
(3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `MaterialID` int(16) NOT NULL,
  `MaterialName` varchar(255) NOT NULL,
  `MaterialType` varchar(255) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Length` int(11) NOT NULL,
  `Width` int(11) NOT NULL,
  `Thickness` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`MaterialID`, `MaterialName`, `MaterialType`, `Type`, `Length`, `Width`, `Thickness`, `SupplierID`) VALUES
(1, 'Colorbond', 'Wall', '', 0, 0, 0, 0),
(2, 'Concrete', 'Floor', '', 0, 0, 0, 0),
(3, 'Yellowtounge', 'Floor', '', 0, 0, 0, 0),
(4, 'Stud and Tack', 'Wall', '', 0, 0, 0, 0),
(5, 'Colorbond', 'Roof', '', 0, 0, 0, 0),
(6, 'Bondor', 'Roof', '', 0, 0, 0, 0),
(7, 'Bondor', 'Walls', '', 0, 0, 0, 0),
(8, 'CFC', 'Floor', '', 0, 0, 0, 0),
(9, '', '', 'Wood', 70, 90, 0, 0),
(10, '', '', 'Wood', 0, 0, 0, 0),
(11, 'test', 'Wall', 'Wood', 10, 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `CustomerID` int(16) NOT NULL,
  `StructureID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `structurerequirement`
--

CREATE TABLE `structurerequirement` (
  `StructureID` int(16) NOT NULL,
  `MaterialID` int(16) NOT NULL,
  `Bays` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `structures`
--

CREATE TABLE `structures` (
  `StructureID` int(6) NOT NULL,
  `Name` varchar(16) NOT NULL,
  `RoofType` varchar(100) NOT NULL,
  `FloorMaterial` varchar(100) NOT NULL,
  `WallMaterial` varchar(100) NOT NULL,
  `RoofMaterial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `structures`
--

INSERT INTO `structures` (`StructureID`, `Name`, `RoofType`, `FloorMaterial`, `WallMaterial`, `RoofMaterial`) VALUES
(123463, '', 'Skew', 'Concrete', 'Colorbond', 'Colorbond'),
(123464, '', 'Skillion', 'Concrete', 'Colorbond', 'Colorbond'),
(123465, '', 'Centre Pitch', 'Concrete', 'Colorbond', 'Colorbond'),
(123466, '', 'Skew', 'Yellowtounge', 'Colorbond', 'Colorbond'),
(123467, '', 'Skew', 'CFC', 'Colorbond', 'Colorbond'),
(123468, '', 'Skew', 'Concrete', 'Stud and Tack', 'Colorbond'),
(123469, '', 'Skew', 'Concrete', 'Colorbond', 'Bondor'),
(123470, '', 'Centre', 'Concrete', 'Colorbond', 'Colorbond');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` int(16) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `ABN` int(11) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `StreetNumber` int(10) NOT NULL,
  `StreetName` varchar(64) NOT NULL,
  `Suburb` varchar(64) NOT NULL,
  `State` varchar(3) NOT NULL,
  `Postcode` int(4) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `SupplierType` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `CompanyName`, `ABN`, `PhoneNumber`, `Email`, `StreetNumber`, `StreetName`, `Suburb`, `State`, `Postcode`, `Region`, `SupplierType`, `password`, `hash`) VALUES
(1, 'DummySup', 0, '0411111111', 'dummy1@g.com', 123, 'fake street', 'fakesville', 'NSW', 2222, '', '', '', ''),
(2, 'FakeSup', 0, '0422222222', 'fake1@g.com', 321, 'fakey street', 'pretendzone', 'VIC', 3333, '', '', '', ''),
(3, 'DummySup', 0, '0', 'dummy@g.com', 123, 'fake street', 'fakesville', 'NSW', 4444, 'Sydney', '', '$2y$11$ENMI7x4zWIFFti18mB5szerOi5qENomiYyBKZ0DK5XZHFCGo4yEIq', '38913e1d6a7b94cb0f55994f679f5956');

-- --------------------------------------------------------

--
-- Table structure for table `workshopcapabilities`
--

CREATE TABLE `workshopcapabilities` (
  `Capability` int(11) NOT NULL,
  `WorkshopID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshopequipment`
--

CREATE TABLE `workshopequipment` (
  `equipmentID` int(11) NOT NULL,
  `WorkshopID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshopqualification`
--

CREATE TABLE `workshopqualification` (
  `QualificationType` varchar(100) NOT NULL,
  `NumberQualified` int(11) NOT NULL,
  `WorkshopID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `workshopID` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `OfficeContact` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `SupplierID` int(16) NOT NULL,
  `Capability` varchar(100) NOT NULL,
  `deliveryDistance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`ContractID`),
  ADD KEY `fk2` (`SupplierID`);

--
-- Indexes for table `contractorcapability`
--
ALTER TABLE `contractorcapability`
  ADD PRIMARY KEY (`Capability`,`ContractorID`),
  ADD KEY `ContractorID` (`ContractorID`);

--
-- Indexes for table `contractorequipment`
--
ALTER TABLE `contractorequipment`
  ADD PRIMARY KEY (`EquipmentID`,`ContractorID`),
  ADD KEY `ContractorID` (`ContractorID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`epuipmentID`);

--
-- Indexes for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD PRIMARY KEY (`SupplierID`,`MaterialID`),
  ADD KEY `MaterialID` (`MaterialID`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`CustomerID`,`StructureID`),
  ADD KEY `StructureID` (`StructureID`);

--
-- Indexes for table `structurerequirement`
--
ALTER TABLE `structurerequirement`
  ADD PRIMARY KEY (`StructureID`,`MaterialID`),
  ADD KEY `MaterialID` (`MaterialID`);

--
-- Indexes for table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`StructureID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `workshopcapabilities`
--
ALTER TABLE `workshopcapabilities`
  ADD PRIMARY KEY (`Capability`,`WorkshopID`),
  ADD KEY `WorkshopID` (`WorkshopID`);

--
-- Indexes for table `workshopequipment`
--
ALTER TABLE `workshopequipment`
  ADD PRIMARY KEY (`equipmentID`,`WorkshopID`),
  ADD KEY `WorkshopID` (`WorkshopID`);

--
-- Indexes for table `workshopqualification`
--
ALTER TABLE `workshopqualification`
  ADD PRIMARY KEY (`QualificationType`,`WorkshopID`),
  ADD KEY `WorkshopID` (`WorkshopID`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`workshopID`),
  ADD KEY `fk1` (`SupplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `ContractID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `epuipmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `MaterialID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `structures`
--
ALTER TABLE `structures`
  MODIFY `StructureID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123471;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `workshopID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractor`
--
ALTER TABLE `contractor`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`SupplierID`);

--
-- Constraints for table `contractorcapability`
--
ALTER TABLE `contractorcapability`
  ADD CONSTRAINT `contractorcapability_ibfk_1` FOREIGN KEY (`ContractorID`) REFERENCES `contractor` (`ContractID`);

--
-- Constraints for table `contractorequipment`
--
ALTER TABLE `contractorequipment`
  ADD CONSTRAINT `contractorequipment_ibfk_1` FOREIGN KEY (`ContractorID`) REFERENCES `contractor` (`ContractID`),
  ADD CONSTRAINT `contractorequipment_ibfk_2` FOREIGN KEY (`EquipmentID`) REFERENCES `equipment` (`epuipmentID`);

--
-- Constraints for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD CONSTRAINT `itemlist_ibfk_1` FOREIGN KEY (`MaterialID`) REFERENCES `materials` (`MaterialID`),
  ADD CONSTRAINT `itemlist_ibfk_2` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`SupplierID`);

--
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`StructureID`) REFERENCES `structures` (`StructureID`),
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `structurerequirement`
--
ALTER TABLE `structurerequirement`
  ADD CONSTRAINT `structurerequirement_ibfk_1` FOREIGN KEY (`StructureID`) REFERENCES `structures` (`StructureID`),
  ADD CONSTRAINT `structurerequirement_ibfk_2` FOREIGN KEY (`MaterialID`) REFERENCES `materials` (`MaterialID`);

--
-- Constraints for table `workshopcapabilities`
--
ALTER TABLE `workshopcapabilities`
  ADD CONSTRAINT `workshopcapabilities_ibfk_1` FOREIGN KEY (`WorkshopID`) REFERENCES `workshops` (`workshopID`);

--
-- Constraints for table `workshopequipment`
--
ALTER TABLE `workshopequipment`
  ADD CONSTRAINT `workshopequipment_ibfk_1` FOREIGN KEY (`WorkshopID`) REFERENCES `workshops` (`workshopID`),
  ADD CONSTRAINT `workshopequipment_ibfk_2` FOREIGN KEY (`equipmentID`) REFERENCES `equipment` (`epuipmentID`);

--
-- Constraints for table `workshopqualification`
--
ALTER TABLE `workshopqualification`
  ADD CONSTRAINT `workshopqualification_ibfk_1` FOREIGN KEY (`WorkshopID`) REFERENCES `workshops` (`workshopID`);

--
-- Constraints for table `workshops`
--
ALTER TABLE `workshops`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`SupplierID`) REFERENCES `supplier` (`SupplierID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
