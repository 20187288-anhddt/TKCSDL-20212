1.Hi?n th? chi ti?t c?a t?t c? m?i ngý?i t? b?ng Person.Person 

Select * FROM Person.Person 

2.Hi?n th? Title, FirstName, MiddleName, LastName và EmailAddress t? b?ng Person.Contact  

SELECT Title, FirstName, MiddleName, LastName, EmailAddress 

FROM Person.Contact 

3.Hi?n th? Title, FirstName, LastName nhý là m?t chu?i n?i nh?m d? ð?c và cung c?p tiêu ð? cho c?t tên (PersonName).  

SELECT Title +’.’+FirstName+’’+LastName AS ‘PersonName’ 

From Person.Person 

 
4.Hi?n th? chi ti?t ð?a ch? c?a t?t c? các nhân viên trong b?ng Person.Address 

SELECT * FROM Person.Address 

5.Li?t kê tên c?a các thành ph? t? b?ng Person.Address và b? ði ph?n l?p l?i.  

SELECT DISTINCT {City} FROM Person.Address 

6.Hi?n th? chi ti?t c?a 10 b?ng ghi ð?u tiên c?a b?ng Person.Address.  

SELECT TOP 10 * FROM Person.Address 

7.Hi?n    th?    trung    b?nh    c?a    t?    giá    (Rate)    t?    b?ng HumanResources.EmployeePayHistory.  

SELECT AVG(Rate) From HumanResources.EmployeePayHistory 

8.Hi?n th? t?ng s? nhân viên t? b?ng HumanResources.Employee  

SELECT COUNT (EmployeeID) AS TitleCount 

FROM HumanResources.Employee 

9.Ðýa ra danh sách các khách hàng có trên 10 ðõn hàng 
12.S?d?ng index trên 1 b?ng nào ð?y, xem xét hi?u nãng th?c thi các câu truy v?n trên b?ng ð?y.

--Câu 4 t?o b?ng m?i có tên cityindex g?m các trý?ng d? li?u c?a b?ng Person.Address,sau ðó t?o ch? m?c có tên idcityindex trên trý?ng City
--Câu l?nh th? 1 chi?m 82% t?ng chi phí trong khi câu l?nh s? d?ng index ch? chi?m 18% chi phí,nhanh g?p 4,5 l?n
 