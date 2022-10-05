/*
~ This memento pattern is performed for undo functionality. Memento pattern is used to restore state of an object to a previous state. 
-------What is in memento Pattern?
  - aik memento ki class bnai jis me hr us datatype ka attribute bnaya jis tarha ka data editor me likha jana aur un sb k getter/setter bna diye.
  - aik history ki class bnai jis me editor me likhi janay wali hr new text 
    ko sath sath push kia gaya aur undo krny pe pop b kia gaya.
  - aik editor ki class bnai jis me jb jb data write ho ga us ko memento bna k history
    me push kia jaye ga aur jb jb data undo ho ga us ko memento bna k restore kia jaye ga.
*/


//EditorStates = memento
//Editor = Originator
//History = Caretaker


using System;
using System.Collections.Generic;

namespace mementoFinalPattern
{
	//memento class => This is the class which will contain all the type of data which can be stored in your editor either it is string or char or int etc.
	class memento
	{
		private string con;
		//if any integer you want in editor, then make its attribute here too.

		//constructor
		public memento(string content)
		{
			this.con = content;
		}
		//getter
		public string getCon()
		{
			return con;
		}
	};

	// Editor class => This class will take the reference of memento class.
	class originator
	{

		private string content;
		//if any integer you want in editor, then make its attribute here too.

		//getter/setter
		public void setContent(string content)
		{
			this.content = content;
		}
		public string getContent()
		{
			return content;
		}

		public memento createState()  //this function will make your content ready for to be pushed in history(memento).         
		{
			return (new memento(content));
		}

		//read content through memento
		public void restore(memento m)    //this function will make you memento, content.
		{
			content = m.getCon();
		}
	};

	//composition => history class is composed of memento class. This class will add & remove data(memento) in your list.
	class history
	{
		private List<memento> l = new List<memento>();
		public void push(memento content)
		{
			l.Add(content);
		}
		public memento pop()
		{
			int lastIndex = l.Count - 1;
			memento content = l[lastIndex - 1];
			l.RemoveAt(lastIndex - 1);
			return content;
		}
	};

	//main
	class Program
	{
		static void Main(string[] args)
		{
			originator o = new originator();
			history h = new history();

			o.setContent("a");            //content is written in editor.  
			h.push(o.createState());     //make the memento of your content and save it in history

			o.setContent("b");
			h.push(o.createState());

			o.setContent("c");
			h.push(o.createState());
			o.restore(h.pop());                     //undo functionality
			Console.WriteLine(o.getContent());    //b because c is removed.

			o.setContent("d");
			h.push(o.createState());

			o.setContent("e");
			h.push(o.createState());
			o.restore(h.pop());                    //undo functionality
			Console.WriteLine(o.getContent());     //d because e is removed
		}
	}
}