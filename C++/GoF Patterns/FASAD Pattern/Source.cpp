#include<iostream> 
using namespace std;

class ShapeDetecter
{
private:
	string File;
public:
	void shapeDetection(string file)
	{
		File = file;
		cout << "Shape is being detected\n";
		//Logic of detecting shape
	}
};

class EdgeDetecter
{
private:
	ShapeDetecter sp;
public:
	void edgeeDetection(ShapeDetecter s)
	{
		sp = s;
		cout << "Edges are being detected\n";
		//Logic of detecting edges of shape
	}
};

class FindContours
{
private:
	EdgeDetecter ed;
public:
	void finding(EdgeDetecter e)
	{
		ed = e;
		cout << "Finding Contours\n";
		//Logic of Finding Contours at edges of shape
	}

	void refiningContours()
	{
		cout << "Countours are being refined\n";
	}
};

class Mask
{
private:
	FindContours fd;
public:
	void maskingCountours(FindContours e)
	{
		fd = e;
		cout << "Mask is being made by contours\n";
		//Logic of masking Contours at edges of shape
	}

	void blendingMask()
	{
		cout << "Mask is being Blend\n";
	}
};

class BackgroundRemoverFasad
{
private:
	
public:
	string BackgroundRemover_Fasad(string file)
	{
		ShapeDetecter sd;
		sd.shapeDetection(file);
		EdgeDetecter ed;
		ed.edgeeDetection(sd);
		FindContours fc;
		fc.finding(ed);
		fc.refiningContours();
		Mask m;
		m.maskingCountours(fc);
		m.blendingMask();
		return file + " is now Background Less Picture\n";
	}
};

int main()
{
	BackgroundRemoverFasad bd;
	string s = bd.BackgroundRemover_Fasad("MyPIc.png");
	cout << s; //final
	return 0;
}