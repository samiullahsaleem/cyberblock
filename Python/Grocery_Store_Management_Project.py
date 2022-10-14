print("""******------ "GROCERY STORE MANAGEMENT SYSTEM"  ------******
              Prepared By  
*-----------  FASIH ULLAH SALEEM   263  -----------*
*-----------  ANAS JAVAID KIBRIYA  262  -----------*""")
input("************  PRESS ENTER TO PROCEED  **************")
#We store the items in the file and store the quanitity of the  items in the list
quantity_initial = [10,20,15,20,25,14,6,10,17,25] 
# this list would be appended by the owner
while True:
    # we used this loop so that program would not end after just one function 
    #this loop would also ensure the proper working of exit function
    data = {}
    all_data = open ("all_items.txt","r")
    for line in all_data:
        key,value =line.split(",")
        data[key] =value
    # we use triple inverted commas so that they don't affects the string.
    try:
        rank = int(input("""Ranks:
                         1. Owner
                         2. Cashier
                         3. Customer
----------------- 4. IF YOU WANT TO EXIT THE PROGRAM ------------------
-----------   Please tell us your rank:  \n """))
        # we use the while function to ensure that the error does not occurs.
        # due to the wrong input of the user
        while rank <=0 or rank >4:
            print("  \t\t\t ERROR!!! \n Please enter the value 1 to 4 ")
            rank = int(input("""Ranks:
                             1. Owner
                             2. Cashier
                             3. Customer
            4. If you want to exit the program
        Please tell us your rank:  \n """))
            
        # we use \n to input the answer in next line.
        
        if  rank == 1 : 
            n = int(input("""--------------- As you are the owner of the Store:
--------------- 1. Add new item
--------------- 2. Change the price of the item
--------------- 3. Change the Quantity of the item\n"""))
# this is the check loop which ensure that user would insert the correct value
            while n<=0 or n >3:
                print("----------****************************----------")
                print("""\t\t\t\t    ERROR !!!\n
------------------------------------------------
             Please enter value  1 to 3 """)
                n = int(input(""" --------------- As you are the owner of the Store:
--------------- 1. Add new item
--------------- 2. Change the price of the item
--------------- 3. Change the Quantity of the item\n"""))
        # We use while loop to ensure that the INPUT of user must be according to condition
            if n == 1:
                print("******************************************************************")
                f = input("""Please enter NAME and PRICE of item(Seperated by single comma)\n
------------------------------------------------------------------\n
***************  For Example:  item,price  ***********************\n""")
                item = open("all_items.txt", "a")
                item.write(f"{f.lower()}\n")
                # we used the lower function to ensure that the user input should be in
                # lower words for the proper functioning of the program.
                #We used the formatted string and the back slash,
                # So that new entered item would be on new line
                q1 = int(input("Please Enter the Quantity of the item: \n"))
                quantity_initial.append(q1)
                print("----------------------------------------------------------------------------------")
                item.close()
                all_data = open ("all_items.txt","r")
                for line in all_data:
                    key,value =line.split(",")
                    data[key] =value
                print("-------------------------------  Updated!  ---------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                print("----------------------------------------------------------------------------------")
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
                print("----------------------------------------------------------------------------------")
                print("------------------------------ Your item has been added --------------------------")
                print("----------------------------------------------------------------------------------")
            elif n ==2 :
                all_data = open ("all_items.txt","r")
                for line in all_data:
                    key,value =line.split(",")
                    data[key] =value
                print("----------------------------------------------------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                print("----------------------------------------------------------------------------------")
                # We used for loop to print the item and their prices 
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
                print("----------------------------------------------------------------------------------")
                name3 =input("Please Enter the exact name of the item to change the Price:\n")
                new_price =int(input("Please enter new Price of Item: \n"))
                data[name3.lower()] = new_price
                all_data.close()
                all_data = open("all_items.txt", "a")
                all_data.write(f"{name3},{new_price}\n")
                all_data.close()
                # the new price of the same item is stored in dictionary
                print("------------------------------------- Updated!----------------------------------- ")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                print("----------------------------------------------------------------------------------")
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
            if n == 3 :
                print("**********************************************************************************")
                #WE used the *** and --- to make the user interface attractive
                print("-------------------------------- These are the Items -----------------------------")
                print("----------------------------------------------------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
                    
                try:
                    b = int(input("Please enter the (Sr.) of the items whose Quantity you want to change:\n"))
                    new_quantity = int(input("Please enter new Quantity of the Item :\n"))
                    quantity_initial[b-1] = new_quantity
                    print("----------------------------------------------------------------------------------")
                    print("*********************** Quantity of the Item has been Updated *********************")
                    print("----------------------------------------------------------------------------------")
                    print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                    print("----------------------------------------------------------------------------------")
                    num3= 1
                    variable1 = 0
                    for x,y in data.items():
                        z = "{0:^15}".format(x)
                        quan =quantity_initial[variable1]
                        print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                        num3 = num3+1
                        variable1 +=1
                    print("----------------------------------------------------------------------------------")
                except:
                    print("--------------------------------------------------------")
                    print("------------  You Entered invalid COMMAND   ------------")
                    print("***********  Try to FOLLOW the instructons *************")
                    print("********************************************************")
                    
        elif rank == 2: 
            print("As you are the cashier , these are the things You are able to do ")
            print("--------------------------------------------------------------------------------------")
            work = int(input("\t\t1. View the list of the items \n"))
            print("--------------------------------------------------------------------------------------")
            while work<=0 or work>1:
                print("Error !!! Please Enter the Value of given data \n")
                work = int(input("View the list of the items \n"))
            print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
            print("--------------------------------------------------------------------------------------")
            num3= 1
            variable1 = 0
            for x,y in data.items():
                z = "{0:^15}".format(x)
                quan =quantity_initial[variable1]
                print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                num3 = num3+1
                variable1 +=1
            print("--------------------------------------------------------------------------------------")
        if rank ==3 :
            print("As you are Customer, these are the things you are able to do ")
            
            try:
                n = int(input("""--------------1. View the list of the items\n
------------- 2. Buys the items\n
------------- Please choose the option:\n"""))
                while n<=0 or n>2:
                    print("ERROR !!! Please enter number 1 or 2 ")
                    n = int(input("""1. View the list of the items\n
        2. Buys the items\n
        Please choose the option\n"""))
            except:
               print("--------------------------------------------------------")
               print("------------  You Entered invalid COMMAND   ------------")
               print("***********  Try to FOLLOW the instructons *************")
               print("********************************************************") 
               
            if n ==1:
                print("----------------------------------------------------------------------------------")
                print("These are the Items available in store Rigth Now !!!")
                print("----------------------------------------------------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                print("----------------------------------------------------------------------------------")
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
                print("----------------------------------------------------------------------------------")
            if n == 2:
                print("----------------------------------------------------------------------------------")
                print("These are the Items available in store Rigth Now !!!")
                print("----------------------------------------------------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                print("----------------------------------------------------------------------------------")
                num3= 1
                variable1 = 0
                for x,y in data.items():
                    z = "{0:^15}".format(x)
                    quan =quantity_initial[variable1]
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t {y}") 
                    num3 = num3+1
                    variable1 +=1
                print("----------------------------------------------------------------------------------")
                
                buying = {}
                quantiti = []
                while True:
                    # we used this loop to make the new dictionary to insert the item bought by the user
                    d = int(input("""Please enter the (Sr.) of the item you want to purchase:\n"""))
                    m =input("For Confirmation! Please enter the exact name of the item:\n")
                    buy = data[m]
                    buying[m]= buy
                    quantity_ =int(input("please enter the quantity:\n"))
                    while  quantity_initial[d-1] < quantity_:
                        print("----------------------------------------------------------------------------------")
                        print("Sorry,  But Not enough Quantity is available.Try to lower the Quantity")
                        print("----------------------------------------------------------------------------------")
                        quantity_ =int(input("please enter the quantity:\n"))
                    else:
                        print("Your item has been added.")
                    o = int(buy)
                    quantiti.append(quantity_)
                    total =quantity_*o
                    p = input("Do you want to purchase anyother item, Yes or No ?\n")
                    while p.upper() == "YES":
                        d = int(input("""Please enter the (Sr.) of the items you want to purchase:\n"""))
                        m =input("For Confirmation! Please enter the exact name of the item:\n")
                        buy = data[m]
                        buying [m] = buy
                        quantity_ =int(input("please enter the quantity:\n"))
                        while  quantity_initial[d-1] < quantity_:
                            print("----------------------------------------------------------------------------------")
                            print("Sorry,  But Not enough Quantity is available.Try to lower the Quantity")
                            print("----------------------------------------------------------------------------------")
                            quantity_ =int(input("please enter the quantity:\n"))
                        else:
                            print("Your item has been added.")
                        o = int(buy)
                        quantiti.append(quantity_)
                        total = (quantity_*o) + total
                        p = input("Do you want to purchase anyother item, Yes or No ?\n")
                    if p.upper() =="NO":
                        break
                    # we used the print function to make this receipt more user attractive 
                print("**********************************************************************************")
                print("--------------------------- UET NEW CAMPUS GROCERY STORE -------------------------")
                print("**********************************************************************************")
                print("-------------------------------------CASH RECEIPT---------------------------------")
                print("\t")
                print("Date:DD/MM/YYYY\n")
                print("Cashier: ANAS JAVAID KIBRIYA                            OWNER : FASIH ULLAH SALEEM")
                print("----------------------------------------------------------------------------------")
                print("Sr.\t\t\tItems\t\t\tQuantity\t\tPrices(PKR)")
                num3= 1
                variable1 = 0
                for x,y in buying.items():
                    z = "{0:^15}".format(x)
                    quan =quantiti[variable1]
                    p = int(y)
                    print(f"{num3})\t\t{z}\t\t\t{quan}\t\t\t{quan*p}") 
                    num3 = num3+1
                    variable1 +=1
                print("**********************************************************************************")
                print("\t\t\t  The Total Of your Purchase is  Rs",total)
                print("----------------------------------------------------------------------------------")
                print('--------------------------" THANK YOU FOR YOUR PURCHASE "------------------------')
                print("--------------------------------------------------------------------------------- ")
                
        elif rank ==4 :
            print("****----------------EXITED-----------------****")
            print("------ RECOMMENDATION : ")
            print("------ if you added any item then please remove the item from the file -------\n------ otherwise the code would not work properly next time -----")
            print("------ Because the list would already lose it's QUANTITY due to closing the program-------")
            break
        # we used the break function to break the program otherwise program never stopped.
    except:
        print("--------------------------------------------------------")
        print("------------  You Entered invalid COMMAND   ------------")
        print("***********  Try to FOLLOW the instructons *************")
        print("********************************************************")
        print(" --- Guess : If you want to exit the program Press 4 then Enter ---")
        # when user put again and again wrong value the guess will appears So that if user wants to exit 
        # it would a piece of cake for the user
input()
        