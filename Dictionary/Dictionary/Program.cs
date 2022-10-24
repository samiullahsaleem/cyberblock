// See https://aka.ms/new-console-template for more information
using System;
using System.Collections.Generic;
using System.Threading.Tasks.Sources;

namespace Dictionary
{
    public class Program
    {
        public static void Main(string[] args)
        {

            
            foreach (var item in list)
            {
                Console.WriteLine(item);
            }
            Employee[] employees =
            {
                new Employee("CEO","Abdullah",95,200),
                new Employee("Manager", "Hamza", 35,25),
                new Employee("HR","Moeed",32,21),
                new Employee("Lead Developer","Hanzla",55,35),
                new Employee("Intern","Owais",22,8)
            };
            Dictionary<string, Employee> dic = new Dictionary<string, Employee>();
            foreach (var emp in employees)
            {
                dic.Add(emp.Role, emp);
            }

            var key = "CTO";
            if (dic.ContainsKey(key))
            {
                var enployee = dic[key];
                
            }
            else
                Console.WriteLine("Key is not valid");
            Employee result = null;
            if (dic.TryGetValue("Intern",out result))
            {
                Console.WriteLine("Value retrieved");
                Console.WriteLine($"Employee Name:{result.Name},Employee Age: {result.Age}");
            }
            else
            {
                Console.WriteLine("Key is not valid");
            }

            KeyValuePair<string, Employee> keyValuePair = new KeyValuePair<string, Employee>();
            
            for (int i = 0; i < dic.Count; i++)
            {
                keyValuePair = dic.ElementAt(i);
                Console.WriteLine($"{keyValuePair.Key},{keyValuePair.Value}");
            }
            string KeyToUpdate = "CEO";
            if (dic.ContainsKey(KeyToUpdate))
            {
                dic[KeyToUpdate] = new Employee("CEO", "Ghazi", 26, 18);
                Console.WriteLine(dic[KeyToUpdate].Name);

            }
            else
                Console.WriteLine("No employee is found with this key");

            string KeyToRemove = "Intern";
            if (dic.Remove(KeyToRemove))
            {
                Console.WriteLine($"Employee with key{KeyToRemove} is removed");
            }
            else
                Console.WriteLine("No employee is found with this key");
        }
    }
    public class Employee
    {
        public string Role { get; set; }
        public string Name { get; set; }
        public int Age { get; set; }
        public float Rate { get; set; }
        public float Salary
        {
            get
            {
                return Rate* 8 * 5 * 4 * 12;
            }
        }
        public Employee(string role, string name, int age, float rate)
        {
            this.Role = role;
            this.Name = name;
            this.Age = age;
            this.Rate = rate;
        }
    }
}
