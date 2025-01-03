#include <stdio.h>

int stdDtb[2][1000];
int numStudents = 0;  // Variable to keep track of the number of students

void appendarraylist() {
    char rpt;
    do{
        int rgno, cost;
        printf("Enter the Registration Number of the student:\n");
        scanf("%d", &rgno);
        stdDtb[0][numStudents] = rgno;

        printf("How much is the course cost for this semester:\n");
        scanf("%d", &cost);
        stdDtb[1][numStudents] = cost;

        numStudents++;  // Increment the number of students in the database

        printf("Details saved successfully\n");
        printf("Would you like to add another student?\nIf yes, type Y\n");
        scanf(" %c",&rpt);
    }
    while(rpt=='y' || rpt=='Y');
}

void login() {
char rpt;
do{
    int login;
    printf("Good day!\nWelcome to the KSU student database!\nWould you like to:\n1. Sign in as admin.\n2. Continue as guest.\n");
    scanf("%d", &login);

    switch (login) {
        case 1:
            {   int pass;
                printf("Please enter the password to continue: ");
                scanf("%d", &pass);
                if (pass == 0000) {
                    appendarraylist();
                } else {
                    printf("Wrong password!\nGet out of here impostor\n");
                    return;
            }
            }
            break;
        case 2:
            guest_interface();
            break;
        default:
            printf("Invalid choice!\n");
    }
    printf("Would you like to log in again?\nIf yes, type Y\n");
    scanf(" %c",&rpt);
}
while(rpt=='y' || rpt=='Y');
}

void guest_interface(){
char rpt;

    int feebal;
    int regno, amt;
    printf("Enter your registration number: \n");
    scanf("%d",&regno);
    printf("Enter the amount paid: \n");
    scanf("%d",&amt);

    //Match the reg no and find the fee balance from the database
    for(int i=0;i<3;i++){
        if(stdDtb[0][i]==regno){
                feebal=stdDtb[1][i];
                break;
            }
        else if(i==2 && stdDtb[0][i]!=regno){
            printf("You are not a registered student of this school!\nIf this is a mistake, please visit the administration\nThanks!\n");
            return 0;
        }
    }
    //calculate the fee balance
    int bal=feebal-amt;

    for(int i=0;i<3;i++){
        if(stdDtb[0][i]==regno){
                stdDtb[1][i]=bal;
                break;
            }
    }
    do{
    if(amt>=feebal){
        int service;
        printf("Select a service:\n1.Report Online.\n2.Register Units.\n3.Download Exam Card.\n");
        scanf("%d",&service);

        switch (service) {
            case 1:
                printf("Success!\nOnline reporting successful\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;
            case 2:
                printf("Success!\nUnit registration successful\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;
            case 3:
                printf("Success!\nExam card successfully downloaded\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;

            default:
                printf("Not a valid choice");
        }
        }else {
            printf("You are not allowed to access university services until you cleared your fees!\nOutstanding balance: %d\n",bal);
        }

    printf("\n\nWould you like to access another service?\nIf yes, type Y\n");
    scanf(" %c",&rpt);
    }
    while (rpt=='y' || rpt=='Y');
}
int main(){
    login();
    printf("\n\nHave a lovely day;)");
    return 0;
}
