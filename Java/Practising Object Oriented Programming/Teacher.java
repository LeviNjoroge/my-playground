public class Teacher {
    String name;
    String tr_ID;
    int salary;

    Teacher(String name, String tr_ID, int salary){
        name = this.name;
        tr_ID = this.tr_ID;
        salary = this.salary;
    }

    public static double tax(int salary){
        double tax = salary * 0.2;
        return tax;
    }
}
