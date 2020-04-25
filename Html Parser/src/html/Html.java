package html;
 
import java.io.IOException;
import java.time.Clock;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
import java.util.*;
import java.awt.Color;
import java.awt.FlowLayout;
import java.awt.Font;
import javax.swing.JFrame;
import javax.swing.JLabel;

public class Html {
 
  public static void main(String[] args) {
      
      String HTMLSTring = "<!DOCTYPE html>"

	                + "<html>"

	                + "<head>"
              
                        + "<meta charset=\"UTF-8\" />"

	                + "<title>SP PROJECT</title>"
              
                        +"<meta name=\"description\" content=\"Html Paeser\" />"
                        
                        +"<meta name=\"keywords\" content=\"Html tags and attribute\" />"

	                + "</head>"

	                + "<body>"
                        
                        + "<table>"
                        +"<tr>" 
                        +"<th>NAME</th>" 
                        +"<th>ROLL NO</th>" 
                        +"</tr>" 
                        +"<tr>" 
                        +"<td>SANKET JAIN</td>" 
                        +"<td>12BCE081</td>" 
                        +"</tr>"
                        +"<tr>" 
                        +"<td>SHUBHAM RATHI</td>" 
                        +"<td>12BCE097</td>" 
                        +"</tr>"
                        +"</table>"

	                + "<h1 id=\"apply\" color=\"red\">HelloWorld</h1>"
                        +"<h1 style=\"color:blue;font-family:verdana;\">This is a Blue Heading</h1>"
	                + "</table>"
                        
                        + "<h1 class=\"applycss\" color=\"blue\">Sanket</h1>"
              
                        + "<h2 color=\"blue\">Heading 2</h2>"
                        + "<h3 class=\"css2\" color=\"blue\">Sanket</h3>"
                        
                        + "<h4 class=\"css3\" color=\"red\">Heading 4</h4>"
              
                        + "<h5 id=\"style\">Heading 5</h5>"
              
                        + "<h6 >Heading 6</h6>"
                        
                        + "<a href='https://google.com' > Google </a>"
              
                        +  "<img src=\"smiley.gif\" alt=\"Smiley face\" height=\"42\" width=\"42\">"
              
                        + "<p class = \"css3\" id = \"style2\">Html Parser</p>"
                        
                        + "<p id = \"i\">Html Parser1</p>"
                        
                        +"<div id=\"login\" class=\"simple\" >"

            +"<form action=\"login\">"

             +   "Username : <input name=\"Username\" value=\"Enter the username\" id=\"username\" type=\"text\" /><br>"

              +  "Password : <input name=\"Username\" value=\"Enter the password\" id=\"password\" type=\"password\" /><br>"

               + "<input value=\"Submit\" id=\"submit\" type=\"submit\" />"

                
            +"</form>"

        +"</div>"
               + "</body>"

	                + "</html>";
                        
    	  

	        Document html = Jsoup.parse(HTMLSTring);
                String title = html.title();
                System.out.println("Input HTML String to JSoup :" + HTMLSTring);
                System.out.println();
                System.out.println("-------------------Title----------------------");
                System.out.println("-----------------"+title+"-------------------");
                System.out.println("");
                //get meta description content
                String description = html.select("meta[name=description]").get(0).attr("content");
                System.out.println("Meta description : " + description);
                String keywords = html.select("meta[name=keywords]").first().attr("content");
                System.out.println("Meta keyword : " + keywords);
                System.out.println();
                
                /*String h1 = html.body().getElementsByTag("h1").text();
                String h2 = html.body().getElementsByTag("h2").text();
                String h3 = html.body().getElementsByTag("h3").text();
                String h4 = html.body().getElementsByTag("h4").text();
                String h5 = html.body().getElementsByTag("h5").text();
                String h6 = html.body().getElementsByTag("h6").text();
                */
                
                //String clas = html.getElementsByAttribute(class);
                Elements elements = html.getElementsByAttribute("style");
                for(int se=0;se<elements.size();se++)
                {
                    System.out.println(elements.get(se).attr("style"));
                    System.out.println();
                }
                System.out.println("----------------Heading-1-----------------");
                Elements styleh1 = html.select("h1[color]");
                for (Element heading_1 : styleh1) {
 
			System.out.println("Text : " + heading_1.text());
                        System.out.println("color : " + heading_1.attr("color"));
                        System.out.println("class : " + heading_1.attr("class"));
                        System.out.println("id : " + heading_1.attr("id"));
                        System.out.println();
			
		}
                //System.out.print("Heading:(h1)"+h1);
                //System.out.println(" color: " + styleh1.attr("color"));
		//System.out.println();
                
                
                System.out.println("----------------Heading-2-----------------");
                Elements styleh2 = html.select("h2[color]");
                for (Element heading_2 : styleh2) {
 
			System.out.println("Text : " + heading_2.text());
                        System.out.println("color : " + heading_2.attr("color"));
                        System.out.println("class : " + heading_2.attr("class"));
                        System.out.println("id : " + heading_2.attr("id"));
                        System.out.println();
			
		}
                
                System.out.println("----------------Heading-3-----------------");
                Elements styleh3 = html.select("h3[color]");
                for (Element heading_3 : styleh3) {
 
			System.out.println("Text : " + heading_3.text());
                        System.out.println("color : " + heading_3.attr("color"));
                        System.out.println("class : " + heading_3.attr("class"));
                        System.out.println("id : " + heading_3.attr("id"));
                        System.out.println();
			
		}
                
                /*System.out.println("----------------Heading-3-----------------");
                Elements styleh3 = html.select("h3[color]");
                for (Element heading_3 : styleh3) {
 
			System.out.println("Text : " + heading_3.text());
                        System.out.print("color : " + heading_3.attr("color"));
                        System.out.println("class : " + heading_3.attr("class"));
                        System.out.println("id : " + heading_3.attr("id"));
                        System.out.println();
			
		}
                */
                System.out.println("----------------Heading-4-----------------");
                Elements styleh4 = html.select("h4[color]");
                for (Element heading_4 : styleh4) {
 
			System.out.println("Text : " + heading_4.text());
                        System.out.println("color : " + heading_4.attr("color"));
                        System.out.println("class : " + heading_4.attr("class"));
                        System.out.println("id : " + heading_4.attr("id"));
                        System.out.println();
			
		}
                
                System.out.println("----------------Heading-5-----------------");
                Elements styleh5 = html.select("h5[id]");
                for (Element heading_5 : styleh5) {
 
			System.out.println("Text : " + heading_5.text());
                        System.out.println("color : " + heading_5.attr("color"));
                        System.out.println("class : " + heading_5.attr("class"));
                        System.out.println("id : " + heading_5.attr("id"));
                        System.out.println();
			
		}
                
                System.out.println("----------------Heading-6-----------------");
                Elements styleh6 = html.select("h6");
                for (Element heading_6 : styleh6) {
 
			System.out.println("Text : " + heading_6.text());
                        System.out.println("color : " + heading_6.attr("color"));
                        System.out.println("class : " + heading_6.attr("class"));
                        System.out.println("id : " + heading_6.attr("id"));
                        System.out.println();
			
		}
                
                Elements p = html.select("p[id]");
                System.out.println("----------------Paragraph-----------------");
                
                for (Element para : p) {
 
			System.out.println("Text : " + para.text());
                        System.out.println("color : " + para.attr("color"));
                        System.out.println("class : " + para.attr("class"));
                        System.out.println("id : " + para.attr("id"));
                        System.out.println("");
			
		}
                
                
                Elements links = html.select("a[href]");
		for (Element link : links) {
 
			// get the value from href attribute
			System.out.println("\nlink : " + link.attr("href"));
			System.out.println("Text : " + link.text());
 
		}
                System.out.println();
                Elements images = html.select("img[src~=(?i)\\.(png|jpe?g|gif)]");
		for (Element image : images) {
                        System.out.print("-------------------Image----------------------");
                        System.out.println("\nsrc : " + image.attr("src"));
                        System.out.println("alt : " + image.attr("alt"));
			System.out.println("height : " + image.attr("height"));
			System.out.println("width : " + image.attr("width"));
                        System.out.println("----------------------------------------------");
                        
		}
                
        System.out.println();
	
        System.out.println("---------------------Table--------------------");
        Elements tableElements = html.select("table");
        Elements tableHeaderEles = tableElements.select("tr th");
        System.out.println("Headers:");
        System.out.println("________________________");
        for(int i = 0; i < tableHeaderEles.size(); i++) {
            System.out.print(tableHeaderEles.get(i).text()+"\t\t");
         }
        System.out.println();

         Elements tableRowElements = tableElements.select("tr");

         for(int i = 0; i < tableRowElements.size(); i++) {
            Element row = tableRowElements.get(i);
            System.out.println("________________________");
            Elements rowItems = row.select("td");
            for (int j = 0; j < rowItems.size(); j++) {
               System.out.print(rowItems.get(j).text()+"\t");
            }
            
            System.out.println();
  }
         System.out.println("________________________");
         System.out.println("------------------------------------------------");
         System.out.println();
        Element div = html.getElementById("login");
        String cssClass = div.className(); // getting class form HTML element
        System.out.println("class of div tag : " + cssClass);
        System.out.println();
        
        Elements inputElements = html.getElementsByTag("input");
 
	List<String> paramList = new ArrayList<String>();
	for (Element inputElement : inputElements) {
		String key = inputElement.attr("name");
		String value = inputElement.attr("value");
                System.out.println("Key :" + key);
                System.out.println("Value :" + value);
	}
        
}
}