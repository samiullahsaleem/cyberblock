using System;
using Microsoft.Data.SqlClient;
using System.Data;

namespace ClassLibrary1
{
    public class BlogRepos
    {
        static string conns = @"Data Source=(localdb)\MSSQLLocalDB;Initial Catalog=MyDB01;Integrated Security=True;Connect Timeout=30;Encrypt=False;TrustServerCertificate=False;ApplicationIntent=ReadWrite;MultiSubnetFailover=False";
        static SqlConnection conn = new SqlConnection(conns);

        public static void displayPostWithUser()
        {

            string query = "select b.title,b.content,un.name from blog b inner join username un on b.userID=un.id";

            SqlCommand cmd = new SqlCommand(query, conn);

            DataTable dt = new DataTable();         //empty table

            SqlDataAdapter da = new SqlDataAdapter(cmd);
            da.SelectCommand = cmd;

            da.Fill(dt);

            DataSet ds = new DataSet();
            ds.Tables.Add(dt);

            Console.WriteLine(
                format: "{0} {1} {2}",
                arg0: "Title\t",
                arg1: "content\t\t",
                arg2: "UserName"
                );
            foreach (DataRow r in dt.Rows)
            {
                Console.Write(
                    format: "{0:-30} {1} {2}\n",
                    arg0: r[0],
                    arg1: r[1],
                    arg2: r[2]
                    );
            }
        }

        public static void DisplayAllUsersWithPostTitle()
        {
            string query = "select un.name,un.email,b.title from username un left join blog b on b.userID=un.id";
            SqlCommand cmd = new SqlCommand(query, conn);

            DataTable dt = new DataTable();         //empty table

            SqlDataAdapter da = new SqlDataAdapter(cmd);
            da.SelectCommand = cmd;

            da.Fill(dt);

            DataSet ds = new DataSet();
            ds.Tables.Add(dt);

            Console.WriteLine(
                format: "{0:-15} {1:-20} {2:-10}",
                arg0: "Name\t",
                arg1: "Email\t\t",
                arg2: "postTitle"
                );
            foreach (DataRow r in dt.Rows)
            {
                Console.Write(
                    format: "{0:-20} {1:-20} {2:-10}\n",
                    arg0: r[0],
                    arg1: r[1],
                    arg2: r[2]
                    );
            }
        }

        public static void displayUserWithPost()
        {
            //use right outer join
            string query = "select un.name,b.title from blog b inner join username un on b.userID=un.id";
            SqlCommand cmd = new SqlCommand(query, conn);

            DataTable dt = new DataTable();         //empty table

            SqlDataAdapter da = new SqlDataAdapter(cmd);
            da.SelectCommand = cmd;

            da.Fill(dt);

            DataSet ds = new DataSet();
            ds.Tables.Add(dt);

            Console.WriteLine(
                format: "{0:-15} {1:-20}",
                arg0: "Name\t",
                arg1: "PostTitle"
                );
            foreach (DataRow r in dt.Rows)
            {
                Console.Write(
                    format: "{0:-15} {1:-20}\n",
                    arg0: r[0],
                    arg1: r[1]
                    );
            }
        }

        public static void CreateViewInDb()
        {
            conn.Open();

            string query = "create view View1 as (select un.name,un.email,b.title from blog b inner join username un on b.userID=un.id);";
            SqlCommand cmd = new SqlCommand(query, conn);

            cmd.ExecuteNonQuery();
            conn.Close();

            Console.WriteLine("view created");
        }
    }
}
