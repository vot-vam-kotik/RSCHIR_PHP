GRANT ALL PRIVILEGES ON db.* TO 'user'@'%';
FLUSH PRIVILEGES;

use db;

CREATE TABLE IF NOT EXISTS `employee` (`EmployeeId` int(11) NOT NULL,
                                       `Name` varchar(255) DEFAULT NULL,
                                       `Phone` varchar(23) DEFAULT NULL,
                                       `Address` varchar(255) DEFAULT NULL,
                                       `Department` varchar(255) DEFAULT NULL,
                                       `Gender` varchar(255) DEFAULT ' ',
                                       `Email` varchar(255) NOT NULL
);

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeId`, `Name`, `Phone`, `Address`, `Department`, `Gender`, `Email`)
VALUES
    (1, 'Ali', '2147483647', 'lahroe', 'bio', 'male', 'malik@jlaf'),
    (4, 'Ali', '2147483647', 'lahore', 'male', 'bio', 'malik@aldjksf'),
    (5, 'Ahmad', '2147483647', 'lahore', 'Bio', 'male', 'malik@gamil.com'),
    (6, 'Khawar', '0303-1234567', 'House 99 lahore', 'Bio', 'male', 'khawar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--


CREATE TABLE IF NOT EXISTS `user` (
                        `UserId` int(11) NOT NULL,
                        `Name` varchar(255) DEFAULT NULL,
                        `Phone` bigint(13) DEFAULT NULL,
                        `Address` varchar(255) DEFAULT NULL,
                        `Gender` varchar(255) DEFAULT NULL,
                        `Email` varchar(255) DEFAULT NULL,
                        `Password` varchar(255) NOT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Name`, `Phone`, `Address`, `Gender`, `Email`, `UserPassword`)
VALUES (10, 'Wewrew', 3084957932, 'DHA PAHSE 8 , LAHORE', 'MALE', 'm669@gmail.com', 'C12345678'),
        (11, 'Waqas', 3023456754, 'Ravi Road', 'MALE', 'w678@gamil.com', 'C0987654321');


ALTER TABLE `employee`
    ADD PRIMARY KEY (`EmployeeId`);

ALTER TABLE `employee`
    MODIFY `EmployeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;