import mysqlconnect


def addAdmin(name, id):
    sql = "INSERT INTO user (username, userid) VALUES (%s, %s)"
    val = (name, id)
    mysqlconnect.mycursor.execute(sql, val)
    mysqlconnect.mydb.commit()
    print(mysqlconnect.mycursor.rowcount, "record inserted.")


def addCurrencydata(name, value):
    try:
        sql = "INSERT INTO data (currencyname,cuurencyvalue) VALUES (%s, %s)"
        val = (name, value)
        mysqlconnect.mycursor.execute(sql, val)
        mysqlconnect.mydb.commit()
        print(mysqlconnect.mycursor.rowcount, "currency record inserted")
    except:
        print("Currency by this name is already exists! sorry ")
