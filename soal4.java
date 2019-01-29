public class soal4{
	public static void main(String[]args){
		String text1 = "Banana";
        String text2 = "Monkey";
        String text3 = "Banten";
        
        //Mengubah Kalimat Satu karakter
        String KalimatBaru3 = text3.replace("a", "i");
        
        //Mengubah Kalimat Lebih dari Satu karakter
        String KalimatBaru2 = text2.replace("o", "i");
        
         //Mengubah Kalimat Lebih dari Satu karakter
        String KalimatBaru1 = text1.replace("Banana", "Pisang");
        
        //Menampilkan Hasil Sebelum Dan Seesudah Diganti
        System.out.println("===== Contoh Mengubah Satu Karakter");
        
        System.out.println("Sebelum Diubah: "+text1);
        System.out.println("Sesudah Diubah: "+KalimatBaru1);
        
        System.out.println("===== Contoh Mengubah Lebih Dari Satu Karakter");
        
        System.out.println("Sebelum Diubah: "+text2);
        System.out.println("Sesudah Diubah: "+KalimatBaru2);
        
        System.out.println("Sebelum Diubah: "+text3);
        System.out.println("Sesudah Diubah: "+KalimatBaru3);
    }
}