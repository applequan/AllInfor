/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2002-2006 College Entrance Examination Board 
 * (http://www.collegeboard.com).
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author Alyce Brady
 * @author APCS Development Committee
 * @author Cay Horstmann
 */

package info.gridworld.grid;

import java.util.*;



/**
 * An <code>ResizableGrid</code> is a rectangular grid with an unbounded number of rows and
 * columns. <br />
 * The implementation of this class is testable on the AP CS AB exam.
 */
public class ResizableGrid<E> extends AbstractGrid<E>
{
	 private Object[][] occupantArray; // the array storing the grid elements
	 private int rown;
	 private int coln;
	    /**
	     * Constructs an empty bounded grid with the given dimensions.
	     * (Precondition: <code>rows > 0</code> and <code>cols > 0</code>.)
	     * @param rows number of rows in BoundedGrid
	     * @param cols number of columns in BoundedGrid
	     */
	 public ResizableGrid()
	 {rown=16;
	 coln=16;
		 occupantArray = new Object[rown][coln];
	 }
	 public int getNumRows()
	    {
	        return -1;
	    }

	 public int getNumCols()
	    {
	        return -1;
	    }
	 public boolean isValid(Location loc)
	    {
		 return 0 <= loc.getRow()&& 0 <= loc.getCol() ;
	    }
	 public ArrayList<Location> getOccupiedLocations()
	    {
		 ArrayList<Location> theLocations = new ArrayList<Location>();

	        // Look at all grid locations.
		 for (int r = 0; r < rown; r++)
	        {
	            for (int c = 0; c < coln; c++)
	            {
	                // If there's an object at this location, put it in the array.
	                Location loc = new Location(r, c);
	                if (get(loc) != null)
	                    theLocations.add(loc);
	            }
	        }

	        return theLocations;
	    }
	 
	 public E get(Location loc)
	 {
		 if (loc == null)
         throw new NullPointerException("loc == null");
		 if((loc.getRow()<rown)&&(loc.getCol()<coln))
		 return (E) occupantArray[loc.getRow()][loc.getCol()]; // unavoidable warning
		 else
			 return null;
	 }
	 
	 public E put(Location loc, E obj)
	 {
		 if (loc == null)
	            throw new NullPointerException("loc == null");
		 if (obj == null)
	            throw new NullPointerException("obj == null");
		 
		 E oldOccupant = get(loc);		 
		 int countsize=rown ;
		 
		 int rowinter=loc.getRow()-(rown-1);
		 int colinter=loc.getCol()-(coln-1);
		 if((rowinter>=0)||(colinter>=0))
			 countsize=rown+(rowinter>=colinter?rowinter:colinter)+1;
		/* if((loc.getRow()<0)||(colinter<0))
			 countsize=rown-
		if((loc.getRow()>=(rown-1))||(loc.getCol()>=(coln-1)))
			countsize=rown+((loc.getRow()-rown)>(loc.getCol()-coln)?(loc.getRow()-rown):(loc.getCol()-coln));
		*/
		if(countsize>rown)
		{
			Object[][] tempArray=new Object[countsize][countsize];
		for(int i=0;i<rown;i++)
			for(int j=0;j<coln;j++)
			{
				tempArray[i][j]=occupantArray[i][j];
			}
		
			coln=rown=countsize;
			occupantArray=null;
		occupantArray=tempArray;			
		}
	        occupantArray[loc.getRow()][loc.getCol()] = obj;
	        return oldOccupant;
	 }
	
	 public E remove(Location loc)
	 {
		 if (loc == null)
	            throw new NullPointerException("loc == null");
		// Remove the object from the grid.
	        E r = get(loc);
	        if((loc.getRow()<rown)&&(loc.getCol()<coln))
	        	occupantArray[loc.getRow()][loc.getCol()] = null;
	        return r;
	 }
	
	
	
	
}