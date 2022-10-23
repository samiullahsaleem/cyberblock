import mysqlconnect
import insert

class Currency:
    __currencyName = " "
    __currencyValue = 0
    def __init__(self):
        self.__currencyName = "none"
        self.__currencyValue = 0
    def AddNewCurrency(self, name, value):
        self.__currencyName = name
        self.__currencyValue = value
        insert.addCurrencydata(self.__currencyName, self.__currencyValue)
    def printAllcurrencies(self):
        print("Currency  Value  ID")
        mysqlconnect.mycursor.execute("SELECT * FROM data")
        arr = mysqlconnect.mycursor.fetchall()
        for x in arr:
            print(str(x[0]) + "       " + str(x[1]) + "      " + str(x[2]))

    def getCurrencyValue(self, name):
        sql = "SELECT * FROM data WHERE currencyname = %s"
        na = (name,)
        mysqlconnect.mycursor.execute(sql,na)
        value = mysqlconnect.mycursor.fetchall()
        for x in value:
            return x[1]
    
    def getconvertedCurrency(self,value, fromname, toname):
        fromvalue = self.getCurrencyValue(fromname)
        amount = value / fromvalue
        tovalue = self.getCurrencyValue(toname)
        tovalue = tovalue * amount
        return tovalue
    
    def updatecurrency(self, name, value):
        sql = "UPDATE data SET cuurencyvalue = %s WHERE currencyname= %s"
        val = (value, name)
        print("Updated Successfully")
        mysqlconnect.mycursor.execute(sql, val)
