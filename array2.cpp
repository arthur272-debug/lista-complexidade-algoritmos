#include <iostream>
#include <chrono>

# O(1) - complexidade

using namespace std;
using namespace std::chrono;

int main(){

  auto start = steady_clock::now();
  
    int nums[3];
    nums[0] = 900;
    nums[1] = 1000;
    nums[2] = 1100;

    int nums2[] = {1, 3, 5, 7, 11, 13, 17};

    cout << nums2[0] << endl;
    cout << nums2[1] << endl;
    cout << nums2[2] << endl;
    cout << nums2[3] << endl;
    cout << nums2[4] << endl;

  auto end= steady_clock::now();

  auto elapsed= end-start;


  cout << elapsed.count() << "ns\n";
}
