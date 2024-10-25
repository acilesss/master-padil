#include <WiFi.h>
#include <HTTPClient.h>

const char* ssid = "DESKTOP-FADHIL";
const char* password = "87654321";
const char* server = "http://10.0.0.10:8000/api/sensor";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
}

void loop() {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;

    float r1_arus = random(200, 500) / 10.0;
    float r1_tegangan = random(400, 700) / 10.0;
    float r1_daya = r1_arus * r1_tegangan; 
    int r1_pengguna = random(1, 10);
    float r2_arus = random(200, 500) / 10.0;
    float r2_tegangan = random(400, 700) / 10.0;
    float r2_daya = r2_arus * r2_tegangan;
    int r2_pengguna = random(1, 10);

    http.begin(server);
    http.addHeader("Content-Type", "application/json");

    String jsonBody = "{\"r1_arus\":" + String(r1_arus) + 
                      ",\"r1_tegangan\":" + String(r1_tegangan) + 
                      ",\"r1_daya\":" + String(r1_daya) + 
                      ",\"r1_pengguna\":" + String(r1_pengguna) + 
                      ",\"r2_arus\":" + String(r2_arus) + 
                      ",\"r2_tegangan\":" + String(r2_tegangan) + 
                      ",\"r2_daya\":" + String(r2_daya) + 
                      ",\"r2_pengguna\":" + String(r2_pengguna) + "}";

    int httpResponseCode = http.POST(jsonBody);

    if (httpResponseCode > 0) {
      String response = http.getString();
      Serial.println(httpResponseCode);
      Serial.println(response);
    } else {
      Serial.print("Error on sending POST: ");
      Serial.println(httpResponseCode);
    }

    http.end();
  } else {
    Serial.println("WiFi not connected");
  }

  delay(2000);
}
