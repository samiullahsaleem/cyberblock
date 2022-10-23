import mysqlconnect
import insert

class Admin:
    __username = " "
    __userid = 0
    def __init__(self):
        self.__userid = 0
        self.__username = "none"
    def __init__(self, name, id):
        self.__userid = id
        self.__username = name
    def adduser(self, name, id):
        self.__userid = id
        self.__username = name
        insert.addAdmin(self.__username, self.__userid)  