import java.util.Scanner;
public class empsalary
{
public static void main(String [] arg)
{
	Scanner scan=new Scanner(System.in);
	float bsal,epf,etf,vat,allow,gsal,net;
	System.out.println( "Enter your basic sallary" );
	bsal=scan.nextFloat();
	epf=bsal*8/100;
	etf=bsal*12/100;
	vat=bsal*15/100;
	if(bsal<2000){allow=bsal*4/100;}
	else if(bsal<35000){allow=bsal*5/100;}
	else if(bsal<55000){allow=bsal*6/100;}
	else {allow=bsal*8/100;}
	gsal=bsal-(epf+etf+vat);
	net=gsal+allow;
	System.out.println( "\nyour basic salary  is  "+bsal );
	System.out.println( "\nyour  epf is  "+epf  );
	System.out.println( "\nyour  etf is  "+etf  );
	System.out.println( "\nyour  vat is  "+vat  );
	System.out.println( "\nyour  allowance is  "+epf  );
	System.out.println( "\nyour Gross salary is  "+gsal );
	System.out.println( "\nyour Net salary is  "+net );
	
	


}
}
