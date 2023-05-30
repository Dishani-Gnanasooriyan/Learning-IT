
import java.util.Scanner;
public class Nested_if
{
public static void main(String[] arug)
{
String UserName,Password;


  Scanner ab = new Scanner(System.in);
	
  System.out.print("\nEnter the UserName\n");
  UserName=ab.nextLine();
  System.out.print("\nEnter the Password\n");
  Password=ab.nextLine();
	
if(UserName.equals("LIT"))
{
if(Password.equals("LIT2022"))
System.out.print("  Success Your Password");
else 
System.out.print("  Wrong Your Password");
}
else
{
System.out.print("  Wrong Your User name");
}
}
}