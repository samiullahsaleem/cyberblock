#include <stdlib.h>
#include <stdio.h>
#include <conio.h>
#include <iostream>
#include <fstream>
#include <windows.h>
using namespace std;

int const landLevel = 20;
int dinox = 0 ;
int dinoy = landLevel ;
int plantx1 = 150;
int planty1 =landLevel +8;
int plantx2 = 150;
int planty2=landLevel+8;
int plantx3=150;
int planty3=landLevel+8;
bool gamerunning =true;
int moveFoot = 0;
int cloudx = 140;

void instructions();
void printScore () ;
void printFrontPage ();
void resetVariablePositions ();
void header ();
void gotoxy( short x, short y );
void printDino1 () ;
void printDino2 () ;
void printLand ();
void printPlant1 ();
void checkConditions1 () ;
void printCloud ();
void printPlant2 ();
void checkConditions2 ();
void printPlant3 ();
void checkConditions3 () ;
void gameover ();

int main()
{
      int counterPlant1 = 0; 
      int counterPlant2 = 0;
      int counterPlant3 = 0;  
      int score = 0;
      bool flag =false;
      
      printFrontPage ();
      resetVariablePositions ();

     while (gamerunning ){  
           system("cls") ;
            printCloud ();
            
         if(counterPlant1>=2){
                if(counterPlant2>=2){
                        if(counterPlant3>=2){
                              checkConditions3 ();  
                              printPlant3 ();   
                              if(plantx3==54){
                                  flag=true;
                              }
                           if(flag){   
                              checkConditions1 () ;
                              printPlant1 ();
                           }
                               
                        }
                       else{
                              checkConditions3 ();  
                              printPlant3 (); 
                              if(counterPlant3==1){
                                plantx2==69;
                              }                    
                        }
                  }
                 else{
                        checkConditions2 () ;
                        printPlant2 ();
                  }
                  
            }
         else{
                  checkConditions1 (); 
                  printPlant1 ();
            }

           if(moveFoot%2==0){
             printDino1 (); 
           }
           else{printDino2 ();}
           printLand ();
          if(dinox == 100){
                dinox =5;
          }
          if(GetAsyncKeyState( VK_SPACE ) && dinoy ==landLevel ){
                dinoy=dinoy-18;
          }
          if(GetAsyncKeyState( VK_LEFT )){ //ascii LEFT arrow
            if(dinox>0){
             checkConditions1 ();
             dinox=dinox-3; 
            }
           }
          if(GetAsyncKeyState( VK_RIGHT )){ //ascii right arrow
             if(dinox<110){
             checkConditions1 (); 
              dinox=dinox+3;
             }
            } 
          if(dinoy<landLevel){  
               dinoy=dinoy+1;
            }
          if(plantx1==0){
                plantx1=150;
               counterPlant1++; 
            }
          if(plantx2==0){
                plantx2=150;
                counterPlant2++;
            }
          if(plantx3==0){
                plantx3=150;
                 counterPlant3++;
            }
            Sleep(2); 
          moveFoot++;
          cloudx--;
          if(cloudx==0){
              cloudx=140;   
            }
        score = counterPlant1*100 + counterPlant2*200 +counterPlant3*300;
      
      } 
      cout<<endl;     
      cout<<"        Your Score is   "<<score<<endl;
      cout<<"******************************************************************************************************************************************************************"<<endl;
       cout<<endl; 
       gameover (); 
}

     


void gotoxy( short x, short y )
{
    HANDLE hStdout = GetStdHandle(STD_OUTPUT_HANDLE) ;
    COORD position = { x, y } ;
    SetConsoleCursorPosition( hStdout, position ) ;
}

void checkConditions1 () {
  for(int i= 0 ; i<16 ; i++){    
     for(int j = 0 ; j<10 ; j++){
           if(dinox+25-i == plantx1+j  ){
                  if(dinoy+15<planty1 ){

                  }
                  else
                  {
                        gamerunning=false; 
                        }     
            }
      }
  }  
}

void checkConditions2 () {
  for(int i= 0 ; i<16 ; i++){    
     for(int j = 0 ; j<24 ; j++){
           if(dinox+25-i == plantx2+j  ){
                  if(dinoy+15<planty2 ){

                  }
                  else
                  {
                        gamerunning=false; 
                  }     
            }     
      }
  }  
}

void checkConditions3 () {
  for(int i= 0 ; i<16 ; i++){    
     for(int j = 0 ; j<33 ; j++){
           if(dinox+24-i == plantx3+j  ){
                  if(dinoy+15<planty3 ){

                  }
                  else 
                  {
                        gamerunning=false; 
                        }     
            }
      }
  }  
}

void resetVariablePositions () {
      dinox = 0 ;
      dinoy = landLevel ;
      plantx1 = 150;
      planty1 =landLevel +8;
      plantx2 = 150;
      planty2=landLevel+8;
      plantx3=150;
      planty3=landLevel+8;
      gamerunning =true;
      moveFoot = 0;
      cloudx = 140;
}
void printFrontPage () {
      bool stop =true;
      int footcount=0;
      system("cls");   
      header ();
      plantx1 =80;
      planty1 =15 ;
      printPlant1 ();
      plantx2 =75;
      planty2 =25 ;
      printPlant2 ();
      plantx3 =70;
      planty3 =35 ;
      printPlant3 ();
      printScore ();
      instructions(); 
      while(stop){
            dinox=10;
            dinoy=25;
            Sleep(100);
        if(footcount%2==0){
             printDino1 ();
            }
         else{
                printDino2 ();
            }   
           
         if(GetAsyncKeyState( VK_SPACE )){
             stop =false;
            }
           footcount++;
      }

}
void instructions() {        
      
      gotoxy(0,15);
      cout<<"                 INSTRUCTIONS :- "<<endl;
      cout<<endl;
      cout<<"            1 .  Press SPACE BAR TO JUMP . "<<endl;
      cout<<"            2 .  Press LEFT ARROW KEY TO MOVE BACKWARD ."<<endl;
      cout<<"            3 .  Press RIGHT ARROW KEY TO MOVE FORWARD  ."<<endl;
      cout<<"            4 .  JUMP OVER THE HURDLES TO SCORE POINTS  ."<<endl;
      cout<<"            5 .  Press SPACE BAR TO CONTINUE THE GAME . "<<endl;
}

void header () {
     gotoxy(10,2);    cout<<" <><><><>        <><><><><>     <><>         <>          <><><><><>                     <><><><><>      <>          <>   <><>         <> "<<endl; 
     gotoxy(10,3);    cout<<" <>     <>           <>         <>  <>       <>       <>           <>                   <>        <>    <>          <>   <>  <>       <> "<<endl;  
     gotoxy(10,4);    cout<<" <>       <>         <>         <>    <>     <>      <>             <>                  <>         <>   <>          <>   <>    <>     <> "<<endl;
     gotoxy(10,5);    cout<<" <>        <>        <>         <>     <>    <>     <>               <>                 <>        <>    <>          <>   <>     <>    <> "<<endl; 
     gotoxy(10,6);    cout<<" <>         <>       <>         <>      <>   <>     <>               <>                 <><><><><>      <>          <>   <>      <>   <> "<<endl; 
     gotoxy(10,7);    cout<<" <>        <>        <>         <>       <>  <>     <>              <>                  <>    <>        <>          <>   <>       <>  <> "<<endl;
     gotoxy(10,8);    cout<<" <>      <>          <>         <>        <> <>      <>            <>                   <>      <>        <>       <>    <>        <> <> "<<endl;
     gotoxy(10,9);    cout<<" <><><><>        <><><><><>     <>         <><>         <><><><><>                      <>        <>       <><><><>      <>         <><> "<<endl;
     gotoxy(10,10);    cout<<"******************************************************************************************************************************************"<<endl;
     gotoxy(10,11);    cout<<"******************************************************************************************************************************************"<<endl;
}


void printCloud () {
  gotoxy(cloudx,1);    cout<<"  ))))) )  ) )    ) ) ) ) )))";                           
  gotoxy(cloudx,2);    cout<<"(             ) ) )          ) ";
  gotoxy(cloudx,3);    cout<<" (                          )";                        
  gotoxy(cloudx,4);    cout<<"  ( (((((((((((((((((((((((";
}


void printDino1 () {
 gotoxy( dinox,dinoy);         cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+1);       cout<<"              |||  ||||||||||";
 gotoxy( dinox,dinoy+2);       cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+3);       cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+4);       cout<<"              ||||||||";
 gotoxy( dinox,dinoy+5);       cout<<"              ||||||||||||||";
 gotoxy( dinox,dinoy+6);       cout<<"/            /////////|";
 gotoxy( dinox,dinoy+7);       cout<<"//        ////////////|";
 gotoxy( dinox,dinoy+8);       cout<<"///     //////////////||||||";
 gotoxy( dinox,dinoy+9);       cout<<"////___///////////////|   ||";
 gotoxy( dinox,dinoy+10);      cout<<"  ////////////////////|  ";
 gotoxy( dinox,dinoy+11);      cout<<"     /////////////////";
 gotoxy( dinox,dinoy+12);      cout<<"         ////////////";
 gotoxy( dinox,dinoy+13);      cout<<"         ||       || ";
 gotoxy( dinox,dinoy+14);      cout<<"         ||       ^^^ ";
 gotoxy( dinox,dinoy+15);      cout<<"         ^^^          ";
}

void printDino2 () {

 gotoxy( dinox,dinoy);         cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+1);       cout<<"              |||  ||||||||||";
 gotoxy( dinox,dinoy+2);       cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+3);       cout<<"              |||||||||||||||";
 gotoxy( dinox,dinoy+4);       cout<<"              ||||||||";
 gotoxy( dinox,dinoy+5);       cout<<"              ||||||||||||||";
 gotoxy( dinox,dinoy+6);       cout<<"/            /////////|"; 
 gotoxy( dinox,dinoy+7);       cout<<"//        ////////////|";
 gotoxy( dinox,dinoy+8);       cout<<"///     //////////////||||||";
 gotoxy( dinox,dinoy+9);       cout<<"////___///////////////|   ||";
 gotoxy( dinox,dinoy+10);      cout<<"  ////////////////////|  ";
 gotoxy( dinox,dinoy+11);      cout<<"     /////////////////";
 gotoxy( dinox,dinoy+12);      cout<<"         ////////////";
 gotoxy( dinox,dinoy+13);      cout<<"         ||       || ";
 gotoxy( dinox,dinoy+14);      cout<<"         ^^^      || ";
 gotoxy( dinox,dinoy+15);      cout<<"                  ^^^";
}

void printLand () {
      gotoxy(0,landLevel+16);
      cout<<"******************************************************************************************************************************************************************";
}

void printPlant1 () {
      
      gotoxy(plantx1,planty1);    cout<<"     ##";
      gotoxy(plantx1,planty1+1);  cout<<"    ####";
      gotoxy(plantx1,planty1+2);  cout<<"   ######";
      gotoxy(plantx1,planty1+3);  cout<<" ##########";
      gotoxy(plantx1,planty1+4);  cout<<"############";
      gotoxy(plantx1,planty1+5);  cout<<"     ||";
      gotoxy(plantx1,planty1+6);  cout<<"     ||";
      gotoxy(plantx1,planty1+7);  cout<<"     ||";
      plantx1=plantx1-3;
}

void printPlant2 () {
      gotoxy(plantx2,planty2);    cout<<"     ##           ##";
      gotoxy(plantx2,planty2+1);  cout<<"    ####         ####";
      gotoxy(plantx2,planty2+2);  cout<<"   ######       ######";
      gotoxy(plantx2,planty2+3);  cout<<" ##########   ##########";
      gotoxy(plantx2,planty2+4);  cout<<"############ ############";
      gotoxy(plantx2,planty2+5);  cout<<"     ||           ||";
      gotoxy(plantx2,planty2+6);  cout<<"     ||           ||";
      gotoxy(plantx2,planty2+7);  cout<<"     ||           ||";
       plantx2=plantx2-3;
}

void printPlant3 () {

      gotoxy(plantx3,planty3);    cout<<"     ##           ##           ##";
      gotoxy(plantx3,planty3+1);  cout<<"    ####         ####         ####";
      gotoxy(plantx3,planty3+2);  cout<<"   ######       ######       ######";
      gotoxy(plantx3,planty3+3);  cout<<" ##########   ##########   ##########";
      gotoxy(plantx3,planty3+4);  cout<<"############ ############ ############";
      gotoxy(plantx3,planty3+5);  cout<<"     ||           ||           ||";
      gotoxy(plantx3,planty3+6);  cout<<"     ||           ||           ||";
      gotoxy(plantx3,planty3+7);  cout<<"     ||           ||           ||";
      plantx3=plantx3-3;
}
void printScore () {
   gotoxy(115,16); cout<<"<>    <> <>    <> <> "<<endl;
   gotoxy(115,17); cout<<"<>   <>   <>  <>   <> "<<endl;
   gotoxy(115,18); cout<<"<>   <>   <>  <>   <> "<<endl;
   gotoxy(115,19); cout<<"<>    <><>      <><>  "<<endl;

  gotoxy(110,26); cout<<"   <><>     <> <>    <> <>  "<<endl;
  gotoxy(110,27); cout<<" <>    <>  <>   <>  <>   <> "<<endl;
  gotoxy(110,28); cout<<"     <>    <>   <>  <>   <> "<<endl;
  gotoxy(110,29); cout<<"   <><><><>  <><>     <><> "<<endl;

  gotoxy(110,36);    cout<<"  <><><>   <> <>    <> <>  "<<endl;
  gotoxy(110,37);    cout<<"  ____<>  <>   <>  <>   <> "<<endl;
  gotoxy(110,38);    cout<<"  ^^^^<>  <>   <>  <>   <> "<<endl;
  gotoxy(110,39);    cout<<"  <><><>    <><>     <><> "<<endl;

}
void gameover () {
      cout<<"    <><><><><>       <>        <>        <>    <><><><><>          <><><><>    <>          <>  <><><><><>  <><><><>    "<<endl;
      cout<<"  <>              <>   <>    <>  <>    <>  <>  <>               <>          <>  <>        <>   <>          <>      <>  "<<endl;
      cout<<"  <>            <>      <>  <>    <>  <>   <>  <>_______       <>            <>  <>      <>    <>________  <>       <> "<<endl;
      cout<<"  <>    <><><>  <><><><><>  <>      <>     <>  <>^^^^^^^       <>            <>   <>    <>     <>^^^^^^^^  <><><><>    "<<endl;
      cout<<"  <>    <>  <>  <>      <>  <>             <>  <>               <>          <>     <>  <>      <>          <>  <>      "<<endl;
      cout<<"    <><><>  <>  <>      <>  <>             <>  <><><><><>         <><><><><>         <>        <><><><><>  <>     <>   "<<endl;
}