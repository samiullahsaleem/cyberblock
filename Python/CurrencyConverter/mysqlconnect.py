import mysql.connector

mydb = mysql.connector.connect(
    host='localhost',
    user='root',
    password='',
    db = 'currency'
)
#print(mydb)

mycursor = mydb.cursor()
# mycursor.execute("CREATE TABLE data(currencyname varchar(20), cuurencyvalue INT(10))")
mycursor.execute("SHOW TABLES")

for x in mycursor:
    print(x)

mycursor.execute("SELECT * FROM user")
for x in mycursor:
    print(x)

# mycursor.execute("ALTER TABLE data ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY")
