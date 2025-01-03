public class Loop{

    public static void main(String []args){
        int len = 4;
        String str = "x";

        while(str.length() < len){
            str = "a" + str + "b";
        }
        System.out.println(str);
    }
}