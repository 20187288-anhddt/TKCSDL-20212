1.Hi?n th? chi ti?t c?a t?t c? m?i ng�?i t? b?ng Person.Person 

Select * FROM Person.Person 

2.Hi?n th? Title, FirstName, MiddleName, LastName v� EmailAddress t? b?ng Person.Contact  

SELECT Title, FirstName, MiddleName, LastName, EmailAddress 

FROM Person.Contact 

3.Hi?n th? Title, FirstName, LastName nh� l� m?t chu?i n?i nh?m d? �?c v� cung c?p ti�u �? cho c?t t�n (PersonName).  

SELECT Title +�.�+FirstName+��+LastName AS �PersonName� 

From Person.Person 

 
4.Hi?n th? chi ti?t �?a ch? c?a t?t c? c�c nh�n vi�n trong b?ng Person.Address 

SELECT * FROM Person.Address 

5.Li?t k� t�n c?a c�c th�nh ph? t? b?ng Person.Address v� b? �i ph?n l?p l?i.  

SELECT DISTINCT {City} FROM Person.Address 

6.Hi?n th? chi ti?t c?a 10 b?ng ghi �?u ti�n c?a b?ng Person.Address.  

SELECT TOP 10 * FROM Person.Address 

7.Hi?n    th?    trung    b?nh    c?a    t?    gi�    (Rate)    t?    b?ng HumanResources.EmployeePayHistory.  

SELECT AVG(Rate) From HumanResources.EmployeePayHistory 

8.Hi?n th? t?ng s? nh�n vi�n t? b?ng HumanResources.Employee  

SELECT COUNT (EmployeeID) AS TitleCount 

FROM HumanResources.Employee 

9.��a ra danh s�ch c�c kh�ch h�ng c� tr�n 10 ��n h�ng 
12.S?d?ng index tr�n 1 b?ng n�o �?y, xem x�t hi?u n�ng th?c thi c�c c�u truy v?n tr�n b?ng �?y.

--C�u 4 t?o b?ng m?i c� t�n cityindex g?m c�c tr�?ng d? li?u c?a b?ng Person.Address,sau �� t?o ch? m?c c� t�n idcityindex tr�n tr�?ng City
--C�u l?nh th? 1 chi?m 82% t?ng chi ph� trong khi c�u l?nh s? d?ng index ch? chi?m 18% chi ph�,nhanh g?p 4,5 l?n
 