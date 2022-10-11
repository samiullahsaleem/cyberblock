//---------------------------------------------------------------------------- C# implementation-----------------------------------------------------------------------
// In Single pattern, class don't allows more than one instance. 
// It is useful for storing data in one place.

using System;

namespace SingletonPattern
{

    class Program
    {
        public class SingleObject
        {
            // add some fields and/or methods here


            //create an object of SingleObject
            private static SingleObject instance;

            //make the constructor private so that this class cannot be instantiated
            private SingleObject() { }

            //Get the only object available
            public static SingleObject getInstance()
            {
                if (instance == null)
                {
                    instance = new SingleObject();
                }
                return instance;
            }

        }

    }
}
