import wemethods.mymethods;
import java.util.Scanner;
public class maximum
{
public static void main(String [] arg)
{	mymethods ob=new mymethods();
		

Scanner scan=new Scanner(System.in);
	String pw,un,msg="Please Follow the instruction";
	System.out.print("\nenter your user name  ");
	un=scan.nextLine();
	Boolean m=true,n=true,s=true,r=false;
	int ans;
	
	if(un.equals("anu")){System.out.println("\nenter your password  ");
		pw=scan.nextLine();
		
		if(pw.equals("anu123"))
		{System.out.println(" \nyour user name and password is correct ");
			
			
			
			
			
		for(;m;){	
			s=true;
		System.out.println(" 1. Maximum 		2.Math			6.Multi			7.Multi2		8.Stmarks");
		 ans=scan.nextInt();
		
		
		
		if(ans==1){for(;s;){ob.mymax();n=true;s=true;m=false;
		
		for(;n;){
		System.out.println(" \n3. exit  \n4.main Menu \n5.retry");
		 ans=scan.nextInt();
		 if(ans!=3 && ans!=4 && ans!=5){n=true;System.out.println(msg);}
		 if(ans==5){s=true;n=false;}
		 
		 
		if(ans==3){m=false;n=false;s=false;}
		if(ans==4){m=true;n=false;s=false;}
		 
		}//for n
		}//for s
		}//iuf ans1
		
		
		
		
		
		
		
		if(ans==2){for(;s;){ob.mymath();n=true;
		for(;n;){
		System.out.println(" \n3. exit  \n4.main Menu \n5.retry");
		 ans=scan.nextInt();
		 if(ans!=3 && ans!=4 && ans!=5){n=true;System.out.println(msg);}
		 
		 if(ans==5){s=true;n=false;}
		 if(ans==3){m=false;n=false;s=false;}
		if(ans==4){m=true;n=false;s=false;}
		 }
		}
		}
		
		if(ans==6){for(;s;){ob.multi();n=true;
		for(;n;){
		System.out.println(" \n3. exit  \n4.main Menu \n5.retry");
		 ans=scan.nextInt();
		 if(ans!=3 && ans!=4 && ans!=5){n=true;System.out.println(msg);}
		 
		 if(ans==5){s=true;n=false;}
		 if(ans==3){m=false;n=false;s=false;}
		if(ans==4){m=true;n=false;s=false;}
		}
		}
		}
		
		if(ans==7){for(;s;){ob.multi2();n=true;
		for(;n;){
		System.out.println(" \n3. exit  \n4.main Menu \n5.retry");
		 ans=scan.nextInt();
		 if(ans!=3 && ans!=4 && ans!=5){n=true;System.out.println(msg);}
		 
		 if(ans==5){s=true;n=false;}
		 if(ans==3){m=false;n=false;s=false;}
		if(ans==4){m=true;n=false;s=false;}
		}
		}
		}
		
		if(ans==8){for(;s;){ob.stmarks();n=true;
		for(;n;){
		System.out.println(" \n3. exit  \n4.main Menu \n5.retry");
		 ans=scan.nextInt();
		 if(ans!=3 && ans!=4 && ans!=5){n=true;System.out.println(msg);}
		 
		 if(ans==5){s=true;n=false;}
		 if(ans==3){m=false;n=false;s=false;}
		if(ans==4){m=true;n=false;s=false;}
		}
		}
		}
		
		}//for m
			

		}//if pw
		else{System.out.println(" \nyour  password is incorrect ");}
		
	}//if un
	else{System.out.println(" \nyour user name is incorrect ");}

}//main

}//class