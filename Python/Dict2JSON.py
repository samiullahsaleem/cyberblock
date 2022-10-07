#Python program to convert a Dictionary to JSON
#By Soham Gupta (http://github.com/gupta-soham/) (https://www.linkedin.com/in/soham-gupta-in/)
import json

#Input from user and converting it into a dictionary
employees = {}

for i in range(3):
    name = input("Enter employee's name: ")
    salary = input("Enter employee's salary: ")
    print("\n")

    employees[name] = salary

# 👇️ Example --> {'Adam': '100', 'Ben': '100', 'Carl': '100'}
print(employees)


#Another way to do the same using while loops
max_length = 3

while len(employees) < max_length:
    name = input("Enter employee's name: ")
    salary = input("Enter employee's salary: ")
    
     # 👇️ check if key not in dict
    if name not in employees:
        employees[name] = salary
    
print(employees)


# some Dict:
a =  '{ "name":"Jack", "age":21, "city":"California"}'
# converting to JSON:
b = json.loads(a)
print(b["city"],"\n")


#Using dumps() function
Fruit_Dict = {
  'name': 'Apple',
  'color': 'Red',
  'quantity': 10,
  'price': 60
}
Fruit_Json = json.dumps(Fruit_Dict)
print(Fruit_Json,"\n")


#Converting nested dictionary to JSON
dictionary = {
 'fruit':{"Mango": "5","color": "yellow"},
 'vegetable':{"Carrot": "10","color": "orange"},
}
result = json.dumps(dictionary, indent = 3)
print(result,"\n") 


#Convert dictionary to JSON quotes
class fruits(dict):
    def __str__(self):
        return json.dumps(self)
collect = [['bananna','mango']]
result = fruits(collect)
print(result,"\n")


#Convert dictionary to JSON array
import json
dictionary = {'Apple': 2, 'Grapes': 5}
array = [ {'key' : i, 'value' : dictionary[i]} for i in dictionary]
print(json.dumps(array),"\n")


#Convert dictionary to JSON using sort_keys
dictionary ={"Name": "Jhon Doe", "Branch": "CSE", "CGPA": "8.8"} 
result = json.dumps(dictionary, indent = 3, sort_keys = True) 
print(result)