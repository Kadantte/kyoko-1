var url = "https://api.rei.my.id/api/quotes";

var httpRequest = (HttpWebRequest)WebRequest.Create(url);

httpRequest.Accept = "application/json";


var httpResponse = (HttpWebResponse)httpRequest.GetResponse();
using (var streamReader = new StreamReader(httpResponse.GetResponseStream()))
{
   var result = streamReader.ReadToEnd();
}
