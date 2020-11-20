import mysql.connector

mydb =mysql.connector.connect(
  host="nonthapaht228.mysql.database.azure.com",
  user="nonthapaht@nonthapaht228",
  password="Non0642306141",
  database="itflab"
)
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM user")
myresult = mycursor.fetchall()
for i in myresult:
  print(i)
#'nonthapaht228.mysql.database.azure.com', 'nonthapaht@nonthapaht228', 'Non0642306141', 'itflab'