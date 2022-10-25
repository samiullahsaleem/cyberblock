                                            // ************ 19k-0209 ***********
                                           // Using HtmlAgilityPack, scrap the Html doc from the Web.
                                          // Then just save in the file with .html extension.
using HtmlAgilityPack;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;
using static System.Net.Mime.MediaTypeNames;

namespace Q1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter URL: ");
            var url = Console.ReadLine();

            Console.WriteLine("Enter Folder: ");
            var folder = Console.ReadLine();

            GetHTML(url, folder);
            Console.ReadLine();
        }
        private static async void GetHTML(string p_url, string folder)
        {
            string url = p_url;
            var httpClient = new HttpClient();
            var html = await httpClient.GetStringAsync(url);
            Console.WriteLine(html);

            string path = folder + "data.html";
            StreamWriter saveHtml = new StreamWriter(path, true);
            saveHtml.WriteLine(html);
            saveHtml.Dispose();
        }
    }
}
