# BSEF19M031 - Web Engineering Assignment 1 - Task 2
# Contributed by: Ata Ul Mohsin

# Instruction for execution:
# Run the program and type "t2.txt" for the file name.
# You can now test different functions of program.

class FileEditor:
    def __init__(self, file_name):
        self.file_name = file_name
        self.file = open(file_name, "r")
        self.lines = self.file.readlines()
        self.file.close()

    #  read a file and store the content in a list
    def read_file(self):
        self.file = open(self.file_name, "r")
        self.lines = self.file.readlines()
        print("Reading file content")
        print("File has been read and now ready for editing")
        self.file.close()


    def add_line(self, line):
        self.lines.append(line)
        print("Line added")

    # display the content of the file by and print line number with each line
    def display(self):
        print("Displaying file content:")
        for i in range(len(self.lines)):
            print(i, self.lines[i])

    #delete a line from the file
    def delete_line(self, line_number):
        del self.lines[line_number] 
        print("Line deleted")

    # find a word in file with 3 options of first, last or all occurences of the word and print line number with each line
    def find_word_in_file(self, word, option):
        print("Searching the word input by user")
        if option == 1:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    print(i, self.lines[i])
                    break

        elif option == 2:
            totallines = len(self.lines)
            for i in range(totallines-1, -1, -1):
                if word in self.lines[i]:
                    print(i, self.lines[i])
                    break

        elif option == 3:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    print(i, self.lines[i])
        else:
            print("Invalid option")

    # remove a word from file with 3 options of removing first word, last word or all occurences of the word
    def remove_word(self, word, option):
        if option == 1:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, "")
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
                    break
                
        elif option == 2:
            totallines = len(self.lines)
            for i in range(totallines-1, -1, -1):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, "")
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
                    break

        elif option == 3:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, "")
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
        else:
            print("Invalid option")

        print("The word input by you has been removed as per given parameters")

# replace a word with another word in the file with 3 option of first, last or all occurences of the word
    def replace_word(self, word, new_word, option):
        if option == 1:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, new_word)
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
                    break
        elif option == 2:
            totallines = len(self.lines)
            for i in range(totallines-1, -1, -1):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, new_word)
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
                    break

        elif option == 3:
            for i in range(len(self.lines)):
                if word in self.lines[i]:
                    self.lines[i] = self.lines[i].replace(word, new_word)
                    self.lines[i] = self.lines[i].rstrip()
                    self.lines[i] = self.lines[i].lstrip()
        else:
            print("Invalid option")

        print("The word input by you has been replaced as per given parameters")

# find the total count of a word in the file
    def count_word(self, word):
        print("Counting the word input by user................")
        count = 0
        for i in range(len(self.lines)):
            if word in self.lines[i]:
                count += 1
        print(count)

    def save(self):
        print("Saving the file................")
        self.file = open(self.file_name, "w")
        self.file.writelines(self.lines)
        self.file.close()

    def __del__(self):
        self.file.close()

    def saveas(self, file_name):
        self.file = open(file_name, "w")
        self.file.writelines(self.lines)
        self.file.close()


# test code or driver function

try:
    choiceofFile=input("Enter the name of file with extension to be read: ")
    obj1=FileEditor(choiceofFile)
    obj1.read_file()
except:
    print("There an error in loading the file")


# User driven menu

try:
    while True:
        print   ("""    1. Display the content of the file 
    2. Add a line to the file
    3. Delete a line from the file
    4. Find a word with first three occurences in the file
    5. Remove a word from file with 3 options of removing first word, last word or all occurences of the word
    6. Replace a word with another word in the file with 3 options of first, last or all occurences of the word
    7. Count the total count of a word in the file
    8. Save the file
    9. Save the file as
    10. Exit
    """)

        choice=int(input("Enter your choice: "))   
        if choice==1:
            obj1.display()
        elif choice==2:
            line=input("Enter the line to be added: ")
            obj1.add_line(line)
        elif choice==3:
            line_number=int(input("Enter the line number to be deleted: "))
            obj1.delete_line(line_number)
        elif choice==4:
            word=input("Enter the word to be found: ")
            option=int(input("Enter the option: 1. First occurence 2. Last occurence 3. All occurences: "))
            obj1.find_word_in_file(word, option)
        elif choice==5:
            word=input("Enter the word to be removed: ")
            option=int(input("Enter the option to remove the word: 1.First word 2.Last word 3.All occurences of the word: "))
            obj1.remove_word(word, option)
        elif choice==6:
            word=input("Enter the word to be replaced: ")
            new_word=input("Enter the new word: ")
            option=int(input("Enter the option to replace the word: 1.First word 2.Last word 3.All occurences of the word: "))
            obj1.replace_word(word, new_word, option)
        elif choice==7:
            word=input("Enter the word to be counted: ")
            obj1.count_word(word)
        elif choice==8:
            obj1.save()
        elif choice==9:
            file_name=input("Enter the name of file to be saved: ")
            obj1.saveas(file_name)
        elif choice==10:
            print("Thank you for using the file editor")
            break
        else:
            print("Invalid choice")

except:
    print("There is an error in your input")
    
del obj1
